const countValue = document.getElementsByClassName('count-value');
const minusBtn = document.getElementsByClassName('minus-btn');
const plusBtn = document.getElementsByClassName('plus-btn');
const priceForOne = document.getElementsByClassName('price-for-one');
const totalPrice = document.getElementsByClassName('total-price');


for(let i = 0; i < countValue.length; i++){
    let count = countValue[i].textContent;
    let countToInt = parseInt(count);
    totalPrice[i].innerHTML = countToInt * parseInt(priceForOne[i].textContent) + " €";
}

for (let i = 0; i < countValue.length; i++) {
    minusBtn[i].addEventListener('click', () => {
        let count = countValue[i].textContent;
        let countToInt = parseInt(count);
        if (countToInt > 0) {
            countValue[i].innerHTML = countToInt - 1;
        }
        totalPrice[i].innerHTML = (countToInt - 1) * parseInt(priceForOne[i].textContent) + " €";
    });

    plusBtn[i].addEventListener('click', () => {
        let count = countValue[i].textContent;
        let countToInt = parseInt(count);
        countValue[i].innerHTML = countToInt + 1;
        totalPrice[i].innerHTML = (countToInt + 1) * parseInt(priceForOne[i].textContent) + " €";
    });
}
