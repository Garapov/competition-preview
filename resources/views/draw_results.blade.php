<x-guest-layout>
    <x-slot:pagetitle class="font-bold">
        Draw Results
    </x-slot>

    <div class="draw_results__page" x-data="{
        activeTab: 'live',
        setActiveTab(tab) {
            this.activeTab = tab;
        }
    }">
        <div class="draw_results__container">
            <div class="draw_results__tabs">
                <div class="draw_results__tab" :class="{ 'draw_results__tab--active': activeTab === 'live' }" @click="setActiveTab('live')">Live Draw</div>
                <div class="draw_results__tab" :class="{ 'draw_results__tab--active': activeTab === 'instant' }" @click="setActiveTab('instant')">Instant Win</div>
            </div>
            <div class="draw_results__content">
                <div class="draw_results__items">
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="draw_results__item">
                        <div class="draw_results__item-placeholder"></div>
                        <div class="draw_results__item-date">
                            <div class="draw_results__item-date-in">
                                <div class="draw_results__item-date-border" style="--image: url('{{ asset('assets/images/draw_result_image.png') }}') 50% 50% / cover no-repeat;">
                                    <div class="draw_results__item-date-text">
                                        Fri 30th of August 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="draw_results__item-tickets">
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">
                                        2008 (58) VAUXHALL ASTRA VXR (260ps) NURBURGRING – STANDARD EXAMPLE (Draw August 30th)
                                    </div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">Draw 4, £5,000 Tax Free Cash [Draw August 30th]</div>
                                </div>
                            </div>
                            <div class="draw_results__item-ticket">
                                <div class="draw_results__ticket-top">
                                    <div class="draw_results__ticket-name">
                                        <div class="avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                <rect width="33" height="33" rx="16.5" fill="#9947CC"/>
                                                <path d="M17.0391 23.5H15.7344V15.9844C15.7344 15.3906 15.7708 14.6641 15.8438 13.8047H15.8125C15.6875 14.3099 15.5755 14.6719 15.4766 14.8906L11.6484 23.5H11.0078L7.1875 14.9531C7.07812 14.7031 6.96615 14.3203 6.85156 13.8047H6.82031C6.86198 14.2526 6.88281 14.9844 6.88281 16V23.5H5.61719V12.2969H7.35156L10.7891 20.1094C11.0547 20.7083 11.2266 21.1562 11.3047 21.4531H11.3516C11.5755 20.8385 11.7552 20.3802 11.8906 20.0781L15.3984 12.2969H17.0391V23.5ZM28.6641 23.5H27.2109L26.0234 20.3594H21.2734L20.1562 23.5H18.6953L22.9922 12.2969H24.3516L28.6641 23.5ZM25.5938 19.1797L23.8359 14.4062C23.7786 14.25 23.7214 14 23.6641 13.6562H23.6328C23.5807 13.974 23.5208 14.224 23.4531 14.4062L21.7109 19.1797H25.5938Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="name">Mikey A.</div>
                                    </div>
                                    <div class="draw_results__ticket-number">Ticket #11858</div>
                                </div>
                                <div class="draw_results__ticket-bottom">
                                    <div class="draw_results__ticket-text">024 SAMSUNG DU7100 85 INCH SMART 4K ULTRA HD TV [Draw August 30th]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>