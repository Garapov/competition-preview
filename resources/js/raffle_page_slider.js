import Glide from "@glidejs/glide";


export default {
    slider: new Glide('.raffle_page__gallery-glide--js', {
        gap: 0,
        autoplay: 3000
    }).mount(),
    activeSlide: 0,
    init() {
        this.slider.on(['move.after'], () => {
            this.activeSlide = this.slider.index;                    
        })              
    },
    changeSlide(id) {
        this.slider.go(`=${id}`);
        this.activeSlide = this.slider.index;
    }
}

// TODO: При изменении данных в админке не обновляется в корзине