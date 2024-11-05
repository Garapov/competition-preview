// import './bootstrap';
import Glide from '@glidejs/glide'


import initCart from './cart.js'

initCart();

// Alpine.plugin(persist)


// Alpine.store('cart2', {
//     list: this.$persist([]),
 
//     add() {
//         this.list = ['asdasdasdadsadsadsdsa']
//     }
// })








window.addEventListener('wheel_spin', (event) => {
    setTimeout(() => {
        alert(`Вам выпало ${event.detail.result.number}`)
    }, event.detail.result.time * 1000)
    
})

window.addEventListener('render_giveaway_slider', (event) => {

    if (document.querySelector('.giveaway__stories.glide')) {
        console.log('event', event);

        new Glide('.giveaway__stories.glide', {
            gap: 0,
            autoplay: 5000
        }).mount()
    } 
    
})