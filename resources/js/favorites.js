export default () => {
    document.addEventListener('alpine:init', () => {

        Alpine.store('favorites', {
            list: Alpine.$persist([]).as('favorites'),

            ids() {
                return this.list.filter(raffle => raffle != null).map(raffle => raffle.id);
            },
                
            removeFromFavorites(raffleId) {
                this.list[raffleId] = null
            },
         
            addToFavorites({raffle}) {
                // console.log(raffle);
                
                this.list[raffle.id] = raffle
            },
        })
    });
}

// TODO: При изменении данных в админке не обновляется в корзине