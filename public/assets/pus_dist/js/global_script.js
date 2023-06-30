const formatterDate = (date) => {
    const newDate = new Date(date);
    let value = firstZero(newDate.getDate()) + '-' + firstZero(newDate.getMonth() + 1) + '-' + newDate.getFullYear();
    return value;
}

const firstZero = (value) => {
    return value < 10 ? `0${value}` : value;
}