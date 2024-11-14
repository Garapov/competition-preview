export default {
    count: 10,
    maxCount: 10,
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
        console.log(this.count);
        
    },
    setMaxCount(count) {
        this.maxCount = count;
    },
}