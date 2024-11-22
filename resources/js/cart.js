export default () => {
    document.addEventListener('alpine:init', () => {

        Alpine.store('cart', {
            list: Alpine.$persist([]).as('cart'),
                
            removeFromCart(raffleId) {
                this.list[raffleId] = null
            },
         
            addToCart({raffle, count = 0}) {
                console.log(raffle, count)
                    
                if  (this.list[raffle.id]) {
                    this.list[raffle.id].count += +count;
                } else {
                    this.list[raffle.id] = {
                        ...raffle,
                        count: count,
                    }
                }
            },
            increase(raffleId) {
                this.list[raffleId].count++;
            },
            decrease(raffleId) {
                this.list[raffleId].count--;
                if (this.list[raffleId].count < 1) this.list[raffleId] = null;
            },

            getTotalPrice() {
                let price = 0.00;
                this.list.map(item => {
                    if (item != null) price += item.count * item.price;
                })
                return price.toFixed(2);
            }
        })
    });
}

// TODO: При изменении данных в админке не обновляется в корзине