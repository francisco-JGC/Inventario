let itemCounter = document.querySelector('#count-selected-item');
let count = 0;
const changeCheckedInput = (input) =>  input.checked ? input.checked = false : input.checked = true;

function selectedItem(item, input) {
    if (!changeCheckedInput(input)) {
        item.classList.remove('selected');
        count--;
    } else {
        item.classList.toggle('selected')
        count++;
    } 
    itemCounter.textContent = count;
}

function removeItem(item, input) {

    // llamamos esta funcion para anular la seleccion del item
    selectedItem(item,input);
}

function updateItem(item, input){

    // llamamos esta funcion para anular la seleccion del item
    selectedItem(item,input);
}