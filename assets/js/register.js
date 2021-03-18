// ----- Animation ":hover body" ----- //
var button = document.getElementById('right');
var body = document.body;

button.onmouseover = function(){
	body.id = 'hovered';
}

button.onmouseout = function(){
	body.id = '';
}
// ----- END ----- //
// ----- Animation au chargement de la page ----- //
window.onload = () => {
    function anim_transition_1(){
        document.getElementById("left").style.transform = "translate(0%, 0%)";
		document.getElementById("right").style.transform = "translate(0%, 0%)";
    }
    anim_transition_1();
}
// ----- END ----- //