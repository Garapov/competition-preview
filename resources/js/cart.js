export default () => {
    document.addEventListener('alpine:init', () => {

        Alpine.store('cart', {
            list: Alpine.$persist([]).as('cart'),
                
            removeFromCart(raffleId) {
                console.log(raffleId);
                this.list[raffleId] = null
            },
         
            addToCart({raffle, count = 0}) {
                    
                if  (this.list[raffle.id]) {
                    this.list[raffle.id].count += count;
                } else {
                    this.list[raffle.id] = {
                        ...raffle,
                        count: count,
                    }
                }
            } 
        })
    });
}