let studentClassSelect = document.getElementById("studentClass");
let FWD19 = document.querySelectorAll(".FWD19");
let FWD20 = document.querySelectorAll(".FWD20");
let IK19 = document.querySelectorAll(".IK19");
let IK20 = document.querySelectorAll(".IK20");

studentClassSelect.onchange = function () {
    let student = document.getElementById("student_ID").removeAttribute("disabled");

    if (studentClassSelect.value == "FWD19") {
        for (let i = 0; i < FWD19.length; i++) {
            FWD19[i].style.display = 'initial';
        }
    } else {
        for (let i = 0; i < FWD19.length; i++) {
            FWD19[i].style.display = 'none';
        }
    }

    if (studentClassSelect.value == "FWD20") {
        for (let i = 0; i < FWD20.length; i++) {
            FWD20[i].style.display = 'initial';
        }
    } else {
        for (let i = 0; i < FWD20.length; i++) {
            FWD20[i].style.display = 'none';
        }
    }

    if (studentClassSelect.value == "IK19") {
        for (let i = 0; i < IK19.length; i++) {
            IK19[i].style.display = 'initial';
        }
    } else {
        for (let i = 0; i < IK19.length; i++) {
            IK19[i].style.display = 'none';
        }
    }

    if (studentClassSelect.value == "IK20") {
        for (let i = 0; i < IK20.length; i++) {
            IK20[i].style.display = 'initial';
        }
    } else {
        for (let i = 0; i < IK20.length; i++) {
            IK20[i].style.display = 'none';
        }
    }
    return studentClassSelect.value;
};

//    Add and subtract from Beer order
let beer_quantity = document.getElementById('beer_quantity');
let addBeer = document.getElementById('addBeer');
let subtBeer = document.getElementById('subtBeer');

addBeer.addEventListener("click", function () {
    if (beer_quantity.value < 10) {
        beer_quantity.value++;
    }
});

subtBeer.addEventListener("click", function () {
    if (beer_quantity.value > 0) {
        beer_quantity.value--;
    }
});

//    Add and subtract from Wine order
let wine_quantity = document.getElementById('wine_quantity');
let addWine = document.getElementById('addWine');
let subtWine = document.getElementById('subtWine');

addWine.addEventListener("click", function () {
    if (wine_quantity.value < 10) {
        wine_quantity.value++;
    }
});

subtWine.addEventListener("click", function () {
    if (wine_quantity.value > 0) {
        wine_quantity.value--;
    }
});

//    Add and subtract from Soda order
let softdrink_quantity = document.getElementById('softdrink_quantity');
let addSoda = document.getElementById('addSoda');
let subtSoda = document.getElementById('subtSoda');

addSoda.addEventListener("click", function () {
    if (softdrink_quantity.value < 10) {
        softdrink_quantity.value++;
    }
});

subtSoda.addEventListener("click", function () {
    if (softdrink_quantity.value > 0) {
        softdrink_quantity.value--;
    }
});

//    Add and subtract from Moonshine order
let moonshine_quantity = document.getElementById('moonshine_quantity');
let addMoon = document.getElementById('addMoon');
let subtMoon = document.getElementById('subtMoon');

addMoon.addEventListener("click", function () {
    if (moonshine_quantity.value < 10) {
        moonshine_quantity.value++;
    }
});

subtMoon.addEventListener("click", function () {
    if (moonshine_quantity.value > 0) {
        moonshine_quantity.value--;
    }
});
