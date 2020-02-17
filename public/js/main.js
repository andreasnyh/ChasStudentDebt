let studentClassSelect = document.getElementById("studentClass");
let student = document.getElementById("student_ID");

let FWD19 = document.querySelectorAll(".FWD19");
let FWD20 = document.querySelectorAll(".FWD20");
let IK19 = document.querySelectorAll(".IK19");
let IK20 = document.querySelectorAll(".IK20");
let studentsALL = document.querySelectorAll(".studentsALL");

if (studentClassSelect) {
    studentClassSelect.onchange = function () {


        if (student) {
            student.removeAttribute("disabled");
            student.selectedIndex = 0;
        }

        if (studentClassSelect.value == "students_ALL") {
            for (let i = 0; i < studentsALL.length; i++) {
                studentsALL[i].style.display = '';
            }
        } else {
            for (let i = 0; i < studentsALL.length; i++) {
                studentsALL[i].style.display = 'none';
            }
        }

        if (studentClassSelect.value == "FWD19") {
            for (let i = 0; i < FWD19.length; i++) {
                FWD19[i].style.display = '';
            }
        } else {
            for (let i = 0; i < FWD19.length; i++) {
                FWD19[i].style.display = 'none';
            }
        }

        if (studentClassSelect.value == "FWD20") {
            for (let i = 0; i < FWD20.length; i++) {
                FWD20[i].style.display = '';
            }
        } else {
            for (let i = 0; i < FWD20.length; i++) {
                FWD20[i].style.display = 'none';
            }
        }

        if (studentClassSelect.value == "IK19") {
            for (let i = 0; i < IK19.length; i++) {
                IK19[i].style.display = '';
            }
        } else {
            for (let i = 0; i < IK19.length; i++) {
                IK19[i].style.display = 'none';
            }
        }

        if (studentClassSelect.value == "IK20") {
            for (let i = 0; i < IK20.length; i++) {
                IK20[i].style.display = '';
            }
        } else {
            for (let i = 0; i < IK20.length; i++) {
                IK20[i].style.display = 'none';
            }
        }
        return studentClassSelect.value;
    };
}
//    Add and subtract from Beer order
let beer_quantity = document.getElementById('beer_quantity');
let addBeer = document.getElementById('addBeer');
let subtBeer = document.getElementById('subtBeer');

if (addBeer) {
    addBeer.addEventListener("click", function () {
        if (beer_quantity.value < 10) {
            beer_quantity.value++;
        }
    });
}

if (subtBeer) {
    subtBeer.addEventListener("click", function () {
        if (beer_quantity.value > 0) {
            beer_quantity.value--;
        }
    });
}

//    Add and subtract from Wine order
let wine_quantity = document.getElementById('wine_quantity');
let addWine = document.getElementById('addWine');
let subtWine = document.getElementById('subtWine');


if (addWine) {
    addWine.addEventListener("click", function () {
        if (wine_quantity.value < 10) {
            wine_quantity.value++;
        }
    });
}


if (subtWine) {
    subtWine.addEventListener("click", function () {
        if (wine_quantity.value > 0) {
            wine_quantity.value--;
        }
    });
}

//    Add and subtract from Soda order
let softdrink_quantity = document.getElementById('softdrink_quantity');
let addSoda = document.getElementById('addSoda');
let subtSoda = document.getElementById('subtSoda');

if (addSoda) {
    addSoda.addEventListener("click", function () {
        if (softdrink_quantity.value < 10) {
            softdrink_quantity.value++;
        }
    });
}

if (subtSoda) {
    subtSoda.addEventListener("click", function () {
        if (softdrink_quantity.value > 0) {
            softdrink_quantity.value--;
        }
    });
}

//    Add and subtract from Moonshine order
let moonshine_quantity = document.getElementById('moonshine_quantity');
let addMoon = document.getElementById('addMoon');
let subtMoon = document.getElementById('subtMoon');

if (addMoon) {
    addMoon.addEventListener("click", function () {
        if (moonshine_quantity.value < 10) {
            moonshine_quantity.value++;
        }
    });
}

if (subtMoon) {
    subtMoon.addEventListener("click", function () {
        if (moonshine_quantity.value > 0) {
            moonshine_quantity.value--;
        }
    });
}

// toggle class on orders on StudentHistory
let orderBtn = document.getElementsByClassName("orderButton");

if (orderBtn) {
    for (let i = 0; i < orderBtn.length; i++) {
        orderBtn[i].addEventListener("click", function () {
            this.classList.toggle("active");

        });
    }
}
