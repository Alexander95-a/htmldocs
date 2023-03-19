var elems = document.getElementsByName('fine');
for (var i = 0; i < elems.length; i++) {
    elems[i].addEventListener('click', onRed);
}

function onRed() {
    this.style.backgroundColor = 'red'; // при первом срабатывании просто красит в красный
    this.removeEventListener('click', onRed); // при последующи - удаляет саму себя (красный)
    this.addEventListener('click', onGreen); // ...и добавляет другой цвет (зеленый)
}

function onGreen() {
    this.style.backgroundColor = 'green'; // при первом срабатывании просто красит в зеленый
    this.removeEventListener('click', onGreen); // при последующи - удаляет саму себя (зеленый)
    this.addEventListener('click', onRed); // ...и добавляет другой цвет (красный)
}