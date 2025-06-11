function viewNavigation(){
	document.getElementById("navigation").style="display: flex;"

}


function display_secretarial(){
	document.getElementById("display_secretarial").style="display: block; transition: 1s;"
	document.getElementById("display_lessons").style="display: none;"
	document.getElementById("display_empower").style="display: none;"
}

function display_lessons(){
	document.getElementById("display_secretarial").style="display: none;"
	document.getElementById("display_lessons").style="display: block; transition: 1s;"
	document.getElementById("display_empower").style="display: none;"
}


function display_empower(){
	document.getElementById("display_secretarial").style="display: none;"
	document.getElementById("display_lessons").style="display: none;"
	document.getElementById("display_empower").style="display: block; transition: 1s;"
}
