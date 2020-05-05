function getRandomRange(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getRandomSymbol(start, end) {
    return String.fromCharCode(getRandomRange(start, end));
}


export { getRandomRange, getRandomSymbol}