//gallery image slider for project detail page


var container = document.querySelector("#imageContainer"),
    images = Array.from(container.querySelectorAll(".conclusionImage")),
    dotsContainer = document.querySelector("#imageBullets"),
    leftArrow = document.querySelector("#leftArrow"),
    rightArrow = document.querySelector("#rightArrow"),
    imageIndex = 0;


images.forEach(image => image.style.opacity = 0);


//bullets
var emptyImg = "";

for(var i=0; i<images.length; i++){
    emptyImg += "<div class='dot'></div>";
}

dotsContainer.innerHTML = emptyImg;

var dots = Array.from(document.querySelectorAll(".dot"));
console.log(dots);
dots[0].classList.add("active");








//testimonial slideshow functionality

images[0].style.opacity= 1;
dots[0].classList.add("active");

function showImages(e){
    images.forEach(image => image.style.opacity = 0);
    dots.forEach(dot => dot.classList.remove("active"));

    e.target.classList.add("active");
    imageIndex = dots.findIndex(dot => dot.classList.contains("active"));



    images[imageIndex].style.display="block";
    images[imageIndex].style.opacity=1;

}









function prevImage(){
    console.log(images[imageIndex].classList);

    images.forEach(image => image.classList.remove("slide"));
    images.forEach(image => image.classList.remove("slideLeft"));
    images.forEach(image => image.classList.remove("slideOut"));
    images.forEach(image => image.classList.remove("slideOutR"));
    images.forEach(image => image.classList.remove("slideIn"));
    dots.forEach(dot => dot.classList.remove("active"));



    if(imageIndex > 0){

        images[imageIndex].classList.add("slideOut");
        images[imageIndex].style.opacity = 0;


        imageIndex--;
        images[imageIndex].classList.add("slide");


    }else if (imageIndex === 0){

        imageIndex = images.length;

        images[0].classList.add("slideOut");
        images[0].style.opacity = 0;

        imageIndex--;

        images[imageIndex].classList.add("slide");
    }


    images.forEach(image => image.style.opacity = 0);

    images[imageIndex].style.display = "block";
    images[imageIndex].style.opacity = 1;
    dots[imageIndex].classList.add("active");
}







function nextImage(){
    console.log(images[imageIndex].classList);
    console.log(imageIndex);

    images.forEach(image => image.classList.remove("slide"));
    images.forEach(image => image.classList.remove("slideLeft"));
    images.forEach(image => image.classList.remove("slideIn"));
    images.forEach(image => image.classList.remove("slideOutR"));
    images.forEach(image => image.classList.remove("slideOut"));
    dots.forEach(dot => dot.classList.remove("active"));



    images[imageIndex].classList.add("slideIn");
    images[imageIndex].style.opacity = 0;



    if(imageIndex < images.length -1){

        imageIndex++;

        images[imageIndex].classList.add("slideOutR");



    }else if (imageIndex === images.length-1){


        imageIndex = 0;

        images[imageIndex].classList.add("slideOutR");

    }


    images.forEach(image => image.style.opacity = 0);

    images[imageIndex].style.display = "block";
    images[imageIndex].style.opacity = 1;
    dots[imageIndex].classList.add("active");
}









dots.forEach(dot => dot.addEventListener('click', showImages));
rightArrow.addEventListener('click', nextImage);
leftArrow.addEventListener('click', prevImage);



//swipe handling for mobile
if(window.innerWidth < 900){

	var touchstartX = 0,
		touchendX = 0;
		//may need to change container to forEach => image
	container.addEventListener('touchstart', function(e){
		touchstartX = e.changedTouches[0].screenX;
	});

	container.addEventListener('touchend', function(e){
		touchendX = e.changedTouches[0].screenX;
		readSwipe();
	});

  container.addEventListener('touchmove', function(e){
    e.preventDefault();
  });

	function readSwipe(){
		if(touchendX < touchstartX){
			prevImage();
		}else if(touchendX > touchstartX){
			nextImage();
		}
	}

}

rightArrow.addEventListener()
