import rangesliderJs from 'rangeslider-js'
export default {
    count: 10,
    maxCount: 10,
    rangeSlider: null,
    init(maxCount = 10) {
        this.setMaxCount(maxCount);

        if (document.getElementById('slider1')) {
            this.initRangeSlider();
            console.log(rangesliderJs);
            
        }
    },
    plus() {
        this.count++;
        this.validateCount();
    },
    minus() {
        if (this.count > 1) this.count--;
        this.validateCount();
    },
    validateCount() {
        if (this.count < 1) this.count = 1;
        if (this.count > this.maxCount) this.count = this.maxCount;        
        console.log(this.rangeSlider);
        
    },
    setMaxCount(count) {
        this.maxCount = count;
    },
    initRangeSlider() {
        this.rangeSlider = rangesliderJs.create(document.getElementById('slider1'))

    
        
    }
}