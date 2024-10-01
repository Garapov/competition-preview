// import './bootstrap';


window.addEventListener('wheel_spin', (event) => {
    console.log('event', event.detail.result);
    
    setTimeout(() => {
        alert(`Вам выпало ${event.detail.result.number}`)
    }, event.detail.result.time * 1000)
    
})