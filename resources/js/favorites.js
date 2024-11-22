export default () => {
    document.addEventListener('alpine:init', () => {

        Alpine.store('favorites', {
            list: Alpine.$persist([]).as('favorites'),
                
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