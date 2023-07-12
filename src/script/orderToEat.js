

//Order to eat sorting


let defaultOrder = document.getElementsByClassName('default');
const orderContainer = document.getElementById('orderContainer');

const defaultBtn = document.getElementById('defaultBtn');
const ratingBtn = document.getElementById('ratingBtn');

// Create a default array to store the default order
let defaultArray = [];

// Fill the default array with the default order
function fillDefaultArray(){
    // Loop through the default order
    for(let i = 0; i < defaultOrder.length; i++){
        defaultArray.push(defaultOrder[i]);
    }
}

// Call the fill default array function
fillDefaultArray();

// Display the default order
function defaultSort(){
    let container = orderContainer;

    // Delete all container element
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    // Create new container element
    for(let i = 0; i < defaultArray.length; i++){
        container.appendChild(defaultArray[i]);
    }
}

// Add event listener to the default button
defaultBtn.addEventListener("click", () => {
    // Call the default sort function
    defaultSort();
});

//rating sorting

let ratingArray = [];

// Fill the rating array with the default order
function ratingSort(){
    for(let i = 0; i < defaultOrder.length; i++){
        ratingArray.push(defaultOrder[i]);
    }

    // Sort the rating array
    ratingArray.sort(function(a, b){
        return b.dataset.rating - a.dataset.rating;
    });
}

// Display the sorted rating array
function ratingDisplay(){
    let container = orderContainer;

    // Delete all container element
    while (container.firstChild) {
        // Delete the first child of the container
        container.removeChild(container.firstChild);
    }

    // Create new container element
    for(let i = 0; i < ratingArray.length; i++){
        // Create a new element
        container.appendChild(ratingArray[i]);
    }
}

// Add event listener to the rating button
ratingBtn.addEventListener("click", () => {
    // Call the rating sorting function
    ratingSort();
    // Call the rating display function
    ratingDisplay();
});



//Price sorting Descending


let descendingPriceArray = [];

const ascendingPriceBtn = document.getElementById('ascendingPriceBtn');
const descendingPriceBtn = document.getElementById('descendingPriceBtn');

// Fill the descending price array with the default order
function priceSortDescending(){
    // Loop through the default order
    for(let i = 0; i < defaultOrder.length; i++){
        // Push the default order to the descending price array
        descendingPriceArray.push(defaultOrder[i]);
    }

    // Sort the descending price array
    descendingPriceArray.sort(function(a, b){
        // Sort the descending price array in descending order
        return b.dataset.price - a.dataset.price;
    });
}

// Display the sorted descending price array
function priceSortedDescendingDisplay(){
    // Get the order container
    let container = orderContainer;

    // Delete all container element
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    // Create new container element
    for(let i = 0; i < descendingPriceArray.length; i++){
        container.appendChild(descendingPriceArray[i]);
    }
}

// Add event listener to the descending price button
descendingPriceBtn.addEventListener("click", () => {
    // Call the price sort descending function
    priceSortDescending();
    // Call the price sorted descending display function
    priceSortedDescendingDisplay();
});


//Price sorting Ascending


let ascendingPriceArray = [];

// Fill the ascending price array with the default order
function priceSortAscending(){
    // Loop through the default order
    for(let i = 0; i < defaultOrder.length; i++){
        ascendingPriceArray.push(defaultOrder[i]);
    }

    // Sort the ascending price array
    ascendingPriceArray.sort(function(a, b){
        return a.dataset.price - b.dataset.price;
    });
}

// Display the sorted ascending price array
function priceSortedAscendingDisplay(){
    let container = orderContainer;

    // Delete all container element
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    // Create new container element
    for(let i = 0; i < ascendingPriceArray.length; i++){
        container.appendChild(ascendingPriceArray[i]);
    }
}

// Add event listener to the ascending price button
ascendingPriceBtn.addEventListener("click", () => {
    priceSortAscending();
    priceSortedAscendingDisplay();
});