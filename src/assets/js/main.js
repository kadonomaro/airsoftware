document.addEventListener('DOMContentLoaded', () => {
    console.log('loaded');
    let a = 5;
    const arr = [5,4,3,2,7];
    a = Math.max(...arr);
    console.log(a);
});