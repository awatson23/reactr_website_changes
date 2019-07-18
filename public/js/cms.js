//functions to view images in project VIEW page

var thumbnail = Array.from(document.querySelectorAll(".galleryImage")),
		fullImage = Array.from(document.querySelectorAll(".galleryImage img")),
		lgImage = document.querySelector(".largeImage"),
		lgImageAlert = document.querySelector(".imagePop"),
		closeImage = document.querySelector(".closeImage"),
		previous = document.querySelector(".prev"),
		next = document.querySelector(".next"),
		imageIndex = 0;



//opens large image when thumbnail is clicked
function openImg(e){

	lgImage.src = e.target.src;
	lgImageAlert.style.display="block";
	console.log(e.target.src);

}




//close picture viewer
function closeImg(){

	lgImageAlert.style.display = "none";
}





//see next image
function nextImg(){

	imageIndex++;

	//loops index back to 0 to start at beginning
	if(imageIndex > fullImage.length-1){
		imageIndex = 0;
	}

	lgImage.src = fullImage[imageIndex].src;

}





//see previous image
function prevImg(){

	imageIndex--;

	//loops idex to end if beginning is reached
	if(imageIndex < 0){
		imageIndex = fullImage.length-1;
	}

	lgImage.src = fullImage[imageIndex].src;
}




//event listeners
fullImage.forEach(image => image.addEventListener('click', openImg));
closeImage.addEventListener('click', closeImg);
previous.addEventListener('click', prevImg);
next.addEventListener('click', nextImg);
