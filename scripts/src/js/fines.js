var elems = document.getElementsByName('fine');
for (var i = 0; i < elems.length; i++) {
	elems[i].addEventListener('click', onRed);
}

function onRed() {
	this.style.backgroundColor = 'red'; 
	this.removeEventListener('click', onRed);
	this.addEventListener('click', onYellow); 
}

function onYellow() {
	this.style.backgroundColor = 'yellow';
	this.removeEventListener('click', onYellow); 
	this.addEventListener('click', onRed); 
}