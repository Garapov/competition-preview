// import Glide from "@glidejs/glide";


export default {
    glide: null,
    activeSlide: 0,
    init() {
        // if (document.querySelector('.raffle_page__gallery-glide--js')) {
        //     this.glide = new Glide('.raffle_page__gallery-glide--js', {
        //         gap: 0,
        //         autoplay: 3000
        //     }).mount()
        //     this.glide.on(['move.after'], () => {
        //         this.activeSlide = this.glide.index;                    
        //     })     
        // }
    },
    destroy() {
        // this.glide.destroy();
    },
    changeSlide(id) {
        // this.glide.go(`=${id}`);
        // this.activeSlide = this.glide.index;
    },
}

// TODO: При изменении данных в админке не обновляется в корзине