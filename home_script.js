let slideIndex = 2;
showSlide(slideIndex);

function plusSlides(n){
    showSlide(slideIndex += n);
}

function currentSlide(n){
    showSlide(slideIndex = n);
}

function showSlide(n){
    let i;
    let slides = document.getElementsByClassName("mySlides");
	let dot = document.getElementsByClassName("dot");

	if(n > slides.length){slideIndex = 1};
	if(n < 1){slideIndex = slides.length};

    for(i=0; i< slides.length; i++){
        slides[i].style.display="none";
    }
    slides[slideIndex - 1].style.display = "block";

	for(i=0; i < dot.length; i++){
		dot[i].className = dot[i].className.replace(" active", "");
	}

	dot[slideIndex - 1].className += " active";
}