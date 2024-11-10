<x-guest-layout>
    <x-slot:pagetitle class="font-bold">
        checkout
    </x-slot>

    <div class="checkout_page" x-data="{
        questions: [
            {
                title: 'What is the capital of England? *',
                answers: ['Paris', 'Washington', 'London'],
                selected: 'Paris',
            }
        ],
        gameCredit: 0,
        coupons: [],
        payByWallet: true,
        walletAmount: 20,
        paymentMethod: 'card',
        firstName: '',
        lastName: '',
        birthDate: '',
        region: '',
        address: '',
        city: '',
        postcode: '',
        phone: '',
        email: '',
        password: '',
        addCouponField() {
            this.coupons.push({
                code: '',
                isApplyed: false,
                isValid: Math.random() < 0.5,
                discount: 10.35
            })
        },
        removeCouponField(coupon_key) {
            this.coupons.splice(coupon_key, 1);
        },
        cartSubtotal() {
            return $store.cart.list.filter(product => product != null).reduce((accumulator, product) => accumulator + (product.price * product.count), 0);
        },
        cartTotal() {
            if (!this.payByWallet) return this.cartSubtotal() - this.coupons.filter(coupon => coupon.isApplyed && coupon.isValid).reduce((accumulator, coupon) => accumulator + coupon.discount, 0).toFixed(2);

            return this.cartSubtotal() - this.walletAmount - this.coupons.filter(coupon => coupon.isApplyed && coupon.isValid).reduce((accumulator, coupon) => accumulator + coupon.discount, 0).toFixed(2);
        },
        yourSavings() {
            return this.cartSubtotal() - this.cartTotal();
        }
        // TODO: Сделать проверку промокодов, подгрузку кошелька, подключить оплату, сохранять заказ у пользователя, если пользователя нет, то создавать его из полей email и password, отправлять на email письмо о регистрации и заказе 
    }">


        <div class="checkout_page__in checkout_page__container">
            @guest
                <div class="checkout_page__top">
                    Please <a href="{{route('login')}}">log in</a> to receive £0.48 cashback on this order.
                </div>
            @endguest
            <div class="checkout_page__bottom">
                <div class="checkout_page__bottom-side checkout_page__left">

                    <div class="checkout_page__form">
                        <div class="checkout_page__form-block">
                            <div class="checkout_page__title">Entry Question</div>
                            <div class="checkout_page__subtitle">Answer this question correctly to be entered into the live draw.</div>

                            <template x-for="(question, question_key) in questions" :key="question_key">
                                {{-- <div class="title" x-text="question.selected"></div> --}}
                                <div class="checkout_page__question" >
                                    <div class="title" x-text="question.title"></div>
                                    <div class="answers">
                                        <template x-for="(answer, answer_key) in question.answers" :key="answer_key">
                                            <label class="label">
                                                <input type="radio" x-model="question.selected" :value="answer" :name="`question${question_key}`">
                                                <span class="input_placeholder"></span>
                                                <span class="question" x-text="answer"></span>
                                                
                                            </label>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div class="checkout_page__form-block">
                            <div class="checkout_page__title">Billing details</div>
                            <div class="checkout_page__details-fields">
                                <label class="checkout_page__details-field">
                                    <input type="text" placeholder="First name *" x-model="firstName">
                                </label>
                                <label class="checkout_page__details-field">
                                    <input type="text" placeholder="Last name *" x-model="lastName">
                                </label>
                                <label class="checkout_page__details-field checkout_page__details-field--full">
                                    <span class="title">Date of Birth *</span>
                                    <input type="text" placeholder="DD-MM-YYYY" x-mask="99-99-9999" x-model="birthDate">
                                </label>
                                <label class="checkout_page__details-field">
                                    <span class="title">Country/Region *</span>
                                    <input type="text" placeholder="UNITED KINGDOM (UK)" x-model="region">
                                </label>
                                <label class="checkout_page__details-field">
                                    <span class="title">Street address *</span>
                                    <input type="text" placeholder="House number and street name" x-model="address">
                                </label>
                                <label class="checkout_page__details-field">
                                    <input type="text" placeholder="Town / City *" x-model="city">
                                </label>
                                <label class="checkout_page__details-field">
                                    <input type="text" placeholder="Postcode *" x-model="postcode">
                                </label>
                                <label class="checkout_page__details-field">
                                    <input type="phone" placeholder="Phone *" x-model="phone">
                                </label>
                                <label class="checkout_page__details-field">
                                    <input type="email" placeholder="Email address *" x-model="email">
                                </label>
                                <label class="checkout_page__details-field checkout_page__details-field--full">
                                    <input type="password" placeholder="Create account password *" x-model="password">
                                </label>
                            </div>
                        </div>
                        <div class="checkout_page__form-block">
                            <div class="checkout_page__form-checkboxes-title">By completing this purchase you agree to create an account with us</div>
                            <div class="checkout_page__form-checkboxes-items">
                                <label class="checkout_page__form-checkboxes-item">
                                    <input type="checkbox" checked>
                                    <span class="checkbox_placeholder"></span>
                                    <span class="text">Receive draw updates and results (recommended)</span>
                                </label>
                                <label class="checkout_page__form-checkboxes-item">
                                    <input type="checkbox" checked>
                                    <span class="checkbox_placeholder"></span>
                                    <span class="text">Recieve occasional draw updates by text</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="checkout_page__shipping">
                        <div class="checkout_page__shipping-title">
                            <div class="text">Free UK Shipping</div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/shipping.png') }}" alt="">
                            </div>
                        </div>
                        <div class="checkout_page__form-cards">
                            <div class="checkout_page__form-coupons checkout_page__form-card" x-show="coupons.length < 1">
                                <div class="checkout_page__form-card-left">
                                    <div class="icon">
                                        <svg width="100%" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.54887 3.50736C9.63512 0.164215 14.3648 0.164215 15.451 3.50736C15.9368 5.00245 17.3301 6.01471 18.9021 6.01471C22.4173 6.01471 23.8788 10.5129 21.035 12.579C19.7632 13.5031 19.231 15.1409 19.7168 16.636C20.803 19.9792 16.9767 22.7592 14.1328 20.693C12.861 19.769 11.1389 19.769 9.86706 20.693C7.02322 22.7592 3.19685 19.9792 4.2831 16.636C4.76889 15.1409 4.23671 13.5031 2.96491 12.579C0.121064 10.5129 1.58261 6.01471 5.09779 6.01471C6.66983 6.01471 8.06308 5.00245 8.54887 3.50736Z" fill="#AC74F6" stroke="#AC74F6" stroke-width="1.5" />
                                        </svg>
                                    </div>
                                    <div class="text">Got a Promo Code?</div>
                                </div>
                                <div class="checkout_page__form-card-right">
                                    <button class="checkout_page__form-card-button" @click="addCouponField">enter code</button>
                                </div>
                            </div>

                            <template x-for="(coupon, key) in coupons">

                                <div class="checkout_page__form-enter-coupon">
                                    <div class="checkout_page__form-enter-coupon-top">
                                        <div class="checkout_page__form-enter-coupon-left">

                                            <div class="checkout_page__form-enter-coupon-button" :class="{'isOpened': key > 0 }" @click="key > 0 ? removeCouponField(key) : addCouponField">
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="checkout_page__form-enter-coupon-right">
                                            <input type="text" placeholder="Promo Code" x-model="coupon.code">
                                            <button class="checkout_page__form-card-button checkout_page__form-card-button--purple" @click="coupon.isApplyed = true">apply</button>
                                        </div>
                                    </div>
                                    <div class="checkout_page__form-enter-coupon-bottom" x-show="coupon.isApplyed">
                                        <template x-if="coupon.isValid">
                                            <div class="checkout_page__form-enter-coupon-bottom-in checkout_page__form-enter-coupon--valid">
                                                <div class="icon">
                                                    <svg width="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17 9L13.6308 12.7632C12.2957 14.2544 11.6282 15 10.75 15C9.8718 15 9.20425 14.2544 7.86917 12.7632L7 11.7924M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#54DB25" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <div class="text">Promo code: <span x-text="`${coupon.code} has been successfully added`"></span></div>
                                            </div>
                                        </template>
                                        <template x-if="!coupon.isValid">
                                            <div class="checkout_page__form-enter-coupon-bottom-in checkout_page__form-enter-coupon--invalid">
                                                <div class="icon" @click="removeCouponField(key)">
                                                    <svg width="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#FE1F1F" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <div class="text"><span>Invalid promo code</span></div>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                            </template>

                            <div class="checkout_page__form-member-wrap">
                                <div class="checkout_page__form-member checkout_page__form-card">
                                    <div class="checkout_page__form-card-left">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/card.png') }}" alt="">
                                        </div>
                                        <input type="text" placeholder="Membership number">
                                    </div>
                                    <div class="checkout_page__form-card-right">
                                        <button class="checkout_page__form-card-button checkout_page__form-card-button--purple">apply</button>
                                    </div>
                                </div>
                                <div class="checkout_page__form-member-text">Members of our club have access to exclusive offers and discounts</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="checkout_page__bottom-side checkout_page__right">
                    <div class="checkout_page__right-title">
                        <div class="checkout_page__title">Product</div>
                    </div>

                    <div class="checkout_page__right-products">
                        <div class="checkout_page__right-products-titles  checkout_page__right-products--grid">
                            <div class="cart_total__grid-item cart_total__title-item checkout_page__title-item">Product</div>
                            <div class="cart_total__grid-item cart_total__title-item checkout_page__title-item">Quantity</div>
                            <div class="cart_total__grid-item cart_total__title-item checkout_page__title-item">Subtotal</div>
                        </div>
                    </div>
                    <div class="checkout_page__right-container">
                        @livewire('checkout.products')
                        
                        <template x-if="coupons.filter(coupon => coupon.isApplyed && coupon.isValid).length">
                            <div class="checkout_page__right-promocodes">
                                <div class="checkout_page__right-promocodes-left">
                                    <div class="checkout_page__right-promocodes-title">
                                        Promo Code
                                    </div>
                                    <template x-for="(coupon, key) in coupons.filter(coupon => coupon.isApplyed && coupon.isValid)" :key="key">
                                        <div class="checkout_page__right-promocode">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/promocode.svg') }}" alt="">
                                            </div>
                                            <div class="name" x-text="coupon.code"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="checkout_page__right-promocodes-right">
                                    <div class="title">X<span x-text="coupons.filter(coupon => coupon.isApplyed && coupon.isValid).length"></span> promo codes applied</div>
                                    <div class="discount">-£<span x-text="coupons.filter(coupon => coupon.isApplyed && coupon.isValid).reduce((accumulator, coupon) => accumulator + coupon.discount, 0).toFixed(2)"></span></div>
                                </div>
                            </div>
                        </template>
                        
                        <div class="checkout_page__right_total">
                            <div class="checkout_page__right_total_item">
                                <div class="left">game Credit Applied</div>
                                <div class="right" x-text="`£${gameCredit}`"></div>
                            </div>
                            <div class="checkout_page__right_total_item">
                                <div class="left">Subtotal</div>
                                <div class="right" x-text="`£${cartSubtotal().toFixed(2)}`"></div>
                            </div>
                            <div class="checkout_page__right_total_item" x-show="payByWallet">
                                <div class="left">Via wallet</div>
                                <div class="right" x-text="`-£${walletAmount}`"></div>
                            </div>
                            <div class="checkout_page__right_total_item checkout_page__right_total_item--total">
                                <div class="left">total</div>
                                <div class="right" x-text="`£${cartTotal().toFixed(2)}`"></div>
                            </div>
                            <div class="checkout_page__right_total_item checkout_page__right_total_item--savings">
                                <div class="left">Your Savings</div>
                                <div class="right" x-text="`£${yourSavings().toFixed(2)}`"></div>
                            </div>
                        </div>


                        <div class="checkout_page__right-payments">
                            <div class="checkout_page__right-payment">
                                <label class="checkout_page__right-payment-opener">
                                    <div class="checkout_page__right-payment-opener-left">
                                        <div class="icons">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pay_by_wallet.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="delimeter"></div>
                                        <div class="name">PAY BY WALLET</div>
                                    </div>
                                    <div class="checkout_page__right-payment-opener-right">
                                        <div class="checkout_page__right-payment-opener-radio">
                                            <input type="checkbox" x-model="payByWallet">
                                            <div class="radio__placeholder"></div>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="checkout_page__right-payment">
                                <label class="checkout_page__right-payment-opener" :class="{'checkout_page__right-payment-opener--active': paymentMethod == 'card'}">
                                    <div class="checkout_page__right-payment-opener-left">
                                        <div class="icons">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pay_by_mastercard.svg') }}" alt="">
                                            </div>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pay_by_visa.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="delimeter"></div>
                                        <div class="name">Pay by Card</div>
                                    </div>
                                    <div class="checkout_page__right-payment-opener-right">
                                        <div class="checkout_page__right-payment-opener-radio">
                                            <input type="radio" value="card" x-model="paymentMethod">
                                        </div>
                                    </div>
                                </label>
                                <div class="checkout_page__right-payment-body"
                                    x-show="paymentMethod == 'card'" >
                                    <div class="checkout_page__right-payment-form">
                                        <input type="text" class="checkout_page__right-payment-input checkout_page__right-payment-input--card" placeholder="Card number" style="--icon: #fff url('{{ asset('assets/images/card_icon.svg') }}') 20px 50% / 24px no-repeat" x-mask:dynamic="creditCardMask">
                                        <input type="text" class="checkout_page__right-payment-input checkout_page__right-payment-input--date" placeholder="MM/YY" style="--icon: #fff url('{{ asset('assets/images/date_icon.svg') }}') 20px 50% / 24px no-repeat" x-mask="99/99">
                                        <input type="text" class="checkout_page__right-payment-input checkout_page__right-payment-input--cvv" placeholder="CVV" style="--icon: #fff url('{{ asset('assets/images/shield_icon.svg') }}') 20px 50% / 24px no-repeat" x-mask="999">
                                    </div>
                                </div>

                                <script>
                                    function creditCardMask(input) {
                                        return input.startsWith('34') || input.startsWith('37')
                                            ? '9999 999999 99999'
                                            : '9999 9999 9999 9999'
                                    }
                                </script>
                            </div>

                            <div class="checkout_page__right-payment">
                                <label class="checkout_page__right-payment-opener" :class="{'checkout_page__right-payment-opener--active': paymentMethod == 'gapay'}">
                                    <div class="checkout_page__right-payment-opener-left">
                                        <div class="icons">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pay_by_gpay.svg') }}" alt="">
                                            </div>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pay_by_applepay.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="delimeter"></div>
                                        <div class="name">Apple Pay / Google Pay</div>
                                    </div>
                                    <div class="checkout_page__right-payment-opener-right">
                                        <div class="checkout_page__right-payment-opener-radio">
                                            <input type="radio" value="gapay" x-model="paymentMethod">
                                        </div>
                                    </div>
                                </label>
                                
                            </div>

                            <div class="checkout_page__right-confirmation">
                                <div class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</div>
                                <label class="confirmation">
                                    <input type="checkbox" required>
                                    <span>I confirm I am over 18 years old and I have read and agree to the competition terms and conditions *</span>
                                </label>
                            </div>

                            <div class="checkout_page__right-button">
                                <button>PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</x-guest-layout>