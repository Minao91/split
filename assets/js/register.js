// Animation ":hover body" //
var button = document.getElementById('right');
var body = document.body;

button.onmouseover = function(){
	body.id = 'hovered';
}

button.onmouseout = function(){
	body.id = '';
}
// ----- END ----- //