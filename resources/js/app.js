// import './bootstrap';

import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import Glide from '@glidejs/glide'

// import cart from './cart.js'

Alpine.plugin(persist)


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