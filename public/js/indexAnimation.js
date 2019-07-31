

	//for who we are section
	modal = document.querySelector("#learnMoreModal"),
	modalItems = Array.from(modal.querySelectorAll("ul li")),
	modalSpan = modal.querySelectorAll("ul li span"),
	learnMore = document.querySelector("#whoWeAre .learnMore"),
	close = document.querySelector("#closeModal"),

	//project tile gallery
	projectTiles = Array.from(document.querySelectorAll(".projectTitle")),
	projectTileImages = Array.from(document.querySelectorAll(".tileImage")),

	//what we have to offer
	design = document.querySelector("#design"),
	development = document.querySelector("#development"),
	branding = document.querySelector("#branding"),
	software = document.querySelector("#software"),
	offers = document.querySelectorAll(".offer"),

	//why hire reactr
	whyHire = document.querySelector(".hireImage"),
	hireReasons = document.querySelector("#whyHire"),
	moreButton = document.querySelector("#moreLink"),
	lessButton = document.querySelector("#readLess"),
	hireContent = hireReasons.querySelector(".content"),
	reasonsContent = document.querySelector(".hiddenContent"),

	//stats
	number = document.querySelector("#projNum"),
	sponsorNumber = document.querySelector("#sponsNum"),
	jobsNumber = document.querySelector("#jobNum"),
	alumNumber = document.querySelector("#alumNum"),

	//sponsors
	sponsors = document.querySelectorAll(".sponsorLogo"),

	//testimonial slider
	slideIndex = 0,
	bulletContainer = document.querySelector(".bullets");
	slides = Array.from(document.querySelectorAll(".slideContainer")),
	slideContainer = document.querySelector("#testimonials");

	//hide expanded "why hire reactr" content
	reasonsContent.style.display = "none";

//show main hero image on load- do not wait for scroll
// mainComputer.style.visibility = "visible";
// mainComputer.classList.add('slide');



//Homepage Header background changes on Scroll
window.onscroll = function() {
    console.log(window.pageYOffset);
    var header = document.getElementById('singleHeader');
    if ( window.pageYOffset > 620 ) {
        header.classList.add("headerChange");
    } else {
        header.classList.remove("headerChange");
    }
}




//SCROLL ANIMATIONS
var last_pos = 0;
var ticking = false;
var scroll_pos = window.pageYOffset;

/*function doSomething(scroll_pos) {
	console.log(scroll_pos);

	var windowWidth = window.innerWidth;
	//only run animations if on desktop
	if(windowWidth > 960){
		slideOffers(scroll_pos);
	}else{
		console.log("screen is too small!");
		//make sure main her oimage is visible on mobile
		// mainComputer.style.visibility = "visible";
	}
}*/

console.log(scroll_pos)

//slide elements in from left/right as user scrolls to their section
//if this needs to be edited- console.log(scroll_pos) to find new scroll position in console
function slideOffers(scroll_pos){


		if(scroll_pos < 792) {

			mainComputer.style.visibility = "visible";
			mainComputer.classList.add('slide');

		}else if(scroll_pos > 792) {

			mainComputer.style.visibility = "hidden";
			mainComputer.classList.remove('slide');



		} if(scroll_pos > 2200 && scroll_pos < 3000) {


			offers.forEach(offer => offer.style.visibility = "visible");
			offers.forEach(offer => offer.classList.add('slide'));

		}else if(scroll_pos > 3000 || scroll_pos < 2200) {

			offers.forEach(offer => offer.style.visibility="hidden");
			offers.forEach(offer => offer.classList.remove('slide'));



		}if(scroll_pos > 2300 && scroll_pos < 3610) {

			whyHire.style.visibility = "visible";
			whyHire.classList.add('slideLeft');

		}else if(scroll_pos > 3583 || scroll_pos < 1918) {

			whyHire.style.visibility="hidden";
			whyHire.classList.remove('slideLeft');



		}if(scroll_pos > 4020  && scroll_pos < 5292) {

			sponsors.forEach(sponsor => sponsor.style.visibility = "visible");
			sponsors.forEach(sponsor => sponsor.classList.add('fadeIn'));

		}else if(scroll_pos > 6308 || scroll_pos < 3799) {

			sponsors.forEach(sponsor => sponsor.style.visibility="hidden");
			sponsors.forEach(sponsor => sponsor.classList.remove('fadeIn'));



		}

		//if the "why hire reactr" section has been expanded- content underneath has new scroll positions
		if(reasonsContent.style.display == "grid"){

				sponsors.forEach(sponsor => sponsor.style.visibility = "visible");
				sponsors.forEach(sponsor => sponsor.classList.add('fadeIn'));

				if(scroll_pos > 6308 || scroll_pos < 3799){
					sponsors.forEach(sponsor => sponsor.style.visibility = "visible");
					sponsors.forEach(sponsor => sponsor.classList.add('fadeIn'));
				}

		}

}

function Counter(scroll_pos) {
	if (scroll_pos > 3600 && scroll_pos < 6000) {
		countUp();
	}
}




//find scroll-window height
function setFrame() {

	last_pos = window.scrollY;


	if (!ticking) {

		window.requestAnimationFrame(function() {

			doSomething(last_pos);
			ticking = false;

		});

		ticking = true;

	}
}



//event listener for scroll
window.addEventListener('scroll', setFrame, false);





//LEARN MORE POP UP
var item = 0;

function stagger(){

	//modalItems[item].classList.add("slideLeft");
	modalItems[item].style.opacity = 1;
	item++;

}



//pop up shown after clicking "learn more" in who we are section
function openModal(){

	if(modal.style.display = "none"){
		modal.style.display = "grid";

		//slide each list item in separately- 300ms between each
		var viewList = setInterval(stagger, 300);
		item = 0;


		//clear interval once all list items are in view/animation complete
		setTimeout(function(){

			clearInterval(viewList);

		}, 1300);

	}
}




//close pop up
function closeModal(){
	if(modal.style.display = "grid"){
		//reset everything
		modal.style.display = "none";
		modalItems.forEach(item => item.classList.remove("slideLeft"));
		modalItems.forEach(item => item.style.opacity = 0);
	}
}


//event listeners
learnMore.addEventListener('click', openModal);
close.addEventListener('click', closeModal);










//touch device project tiles image/text toggle
function colorHover(e){

//find media query for current window size and check for match
	var mql = window.matchMedia("screen and (min-width: 700px)");

	if(mql.matches){

		console.log("nope");

	}else{

		projectTiles.forEach(tile => tile.classList.remove("hovered"));
		e.target.classList.add("hovered");
		console.log(tileIndex);

		var tileIndex = projectTiles.findIndex(tile => tile.classList.contains("hovered"));
		projectTileImages[tileIndex].style.opacity = 1;

		setTimeout(function(){
			projectTileImages[tileIndex].style.opacity = 0.1;
		}, 1000);
	}
}


projectTiles.forEach(tile => tile.addEventListener('click', colorHover));












//READ MORE FUNCTIONALITY in "why hire" section"
function readMore(){
	reasonsContent.classList.remove("slideDown");
	reasonsContent.classList.remove("slideUp");

	console.log(reasonsContent);

	if(reasonsContent.style.display == "none"){

		reasonsContent.classList.add("slideDown"); //slide down section
		reasonsContent.style.display = "block"; //make section visible
		hireContent.style.maxHeight = "2500px"; //add max-height to contain all content
		moreButton.innerHTML = "read less"; //change "Read more" to "read less"

	}else{

		reasonsContent.classList.add("slideUp"); //slide section back up

		setTimeout(function(){
		reasonsContent.style.display = "none";}, 800); //wait for slide to finish before hiding section
		moreButton.innerHTML = "read more"; //set "read less" back to "read more"
	}
}











//functions for stats- GSAP
function countUpProj(){

	var cont = { val:0 },
		newVal = 34;

	TweenLite.to(cont, 2, { val:newVal, roundProps:"val", onUpdate:function(){projNum.innerHTML=Math.floor(cont.val)}});
}


function countUpSponsor(){

	var cont = { val:0 },
		newVal = 400;

	TweenLite.to(cont, 2, { val:newVal, roundProps:"val", onUpdate:function(){sponsNum.innerHTML=Math.floor(cont.val) + "K"}});
}

function countUpJobs(){

	var cont = { val:0 },
		newVal = 72;

	TweenLite.to(cont, 2, { val:newVal, roundProps:"val", onUpdate:function(){jobNum.innerHTML=Math.floor(cont.val)}});
}


function countUpAlumni(){

	var cont = { val:0 },
		newVal = 95;

	TweenLite.to(cont, 2, { val:newVal, roundProps:"val", onUpdate:function(){alumNum.innerHTML=Math.floor(cont.val) + "%"}});
}



function countUp() {
	countUpProj();
	countUpSponsor();
	countUpJobs();
	countUpAlumni();
}






// TESTIMONIAL

//testimonial slideshow functionality
class SiemaWithDots extends Siema {

	addDots() {
	  // create a contnier for all dots
	  // add a class 'bullets' for styling reason
	  this.bullets = document.querySelector('.bullets');

	  // loop through slides to create a number of dots
	  for(let i = 0; i < this.innerElements.length; i++) {
		// create a dot
		const dot = document.createElement('div');

		// add a class dot to dot
		dot.classList.add('dot');

		// add an event handler to each of them
		dot.addEventListener('click', () => {
		  this.goTo(i);
		})

		// append dot to a container for all of them
		this.bullets.appendChild(dot);
	}

	  // add the container full of dots after selector
	  this.selector.parentNode.insertBefore(this.bullets, this.selector.nextSibling);
	}

	updateDots() {
	// loop through all dots
	for(let i = 0; i < this.bullets.querySelectorAll('div').length; i++) {
		// if current dot matches currentSlide prop, add a class to it, remove otherwise
		const addOrRemove = this.currentSlide === i ? 'add' : 'remove';
		this.bullets.querySelectorAll('div')[i].classList[addOrRemove]('active');
	  }
	}
}

// instantiate new extended Siema
const mySiemaWithDots = new SiemaWithDots({

	selector: '#testimonialContainer',
	duration: 200,
	easing: 'ease-out',
	perPage: 1,
	startIndex: 0,
	draggable: true,
	multipleDrag: true,
	threshold: 20,
	loop: true,
	rtl: false,

	// on init trigger method created above
	onInit: function(){
		this.addDots();
		this.updateDots();
	},

	// on change trigger method created above
	onChange: function(){
		this.updateDots()
	}
});

setInterval(() => mySiemaWithDots.next(), 5000);




// NOT WORKING PROPERLY

// //testimonial slideshow functionality

// //populate x amount of bullets for x amount of testimonials
// var empty = "";

// for(var i=0; i<slides.length; i++){
// 	empty += "<div class='dot'></div>";
// }

// bulletContainer.innerHTML = empty; //append bullets to container once counted

// let dots = Array.from(document.querySelectorAll(".dot"));
// console.log("slides length: " + (slides.length - 1));
// console.log("slide index: " + slideIndex);


// //set first slide to be visible
// slides[0].style.display="block";
// dots[0].classList.add("active");

// //set slide index to whicever testimonial is active
// slideIndex = dots.findIndex(dot => dot.classList.contains("active"));
// console.log(slideIndex);


// //if on desktop, set timer to loop testimonials automatically every 5s
// if(screen.width > 959){

// var changeSlides = setInterval(slideTimer, 5000);


// //set timer for slides change every 5s
// function slideTimer(){

// 		dots.forEach(dot => dot.classList.remove('active'));
// 		slides.forEach(slide => slide.style.display = "none");

// 		//increment slide index
// 		if(slideIndex < slides.length-1){

// 			slideIndex++;

// 		//reset index to 0 if at end of list
// 		}else if(slideIndex >= slides.length-1){

// 			 slideIndex = 0;
// 		}

// 		//set new slide to active
// 		dots[slideIndex].classList.add("active");
// 		slides[slideIndex].style.display="block";
// 		slides[slideIndex].style.opacity=1;

// }
// }else{

// 	//clear timer if not on desktop
// 	clearInterval(slideTimer);
// }





// //click bullets to change image
// slides[0].style.display="block";

// function showSlides(e){
// 	slides.forEach(slide => slide.style.display = "none");

// 	dots.forEach(dot => dot.classList.remove('active'));

// 	//add active class to clicked bullet
// 	e.target.classList.add('active');

// 	//set slide index to same index as clicked bullet
// 	slideIndex = dots.findIndex(dot => dot.classList.contains("active"));
// 	console.log(slideIndex);

// 	//display active slide
// 	slides[slideIndex].style.display="block";

// }





//THIS IS MY ATTEMPTS TO ADD FINGER SWIPE TO TESTIMONIAL MOBILE SLIDER-- MAYBE YOU CAN SOLVE IT?


// if(screen.width < 700){

// 	function flipTestimonial(){

// 		slides.forEach(slide => slide.style.opacity = 0);
// 		dots.forEach(dot => dot.classList.remove('active'));

// 		dots[slideIndex].classList.add("active");
// 		slides[slideIndex].style.display="block";
// 		slides[slideIndex].style.opacity=1;
// 	}

// 	var touchstartX2 = 0,
// 		touchendX2 = 0;
// 		//may need to change container to forEach => image
// 		slideContainer.addEventListener('touchstart', function(e){
// 		touchstartX2 = e.changedTouches[0].screenX;
// 	});

// 		slideContainer.addEventListener('touchend', function(e){
// 		touchendX2 = e.changedTouches[0].screenX;
// 		readNext();
// 	});

// 	function readNext(){

// 		//slides.forEach(slide => slide.style.opacity = 0);

// 	//	dots.forEach(dot => dot.classList.remove('active'));

// 		if(touchendX2 < touchstartX2){

// 			if(slideIndex > 0){
// 			slideIndex --;
// 			flipTestimonial();
// 		}else if (slideIndex = 0){
// 			slideIndex = slides.length-1;
// 			flipTestimonial();
// 		}

// 			//dots[slideIndex].classList.add("active");
// 			//slides[slideIndex].style.display="block";
// 			//slides[slideIndex].style.opacity=1;

// 		}else if(touchendX > touchstartX){
// 			if(slideIndex < slides.length-1){
// 			slideIndex ++;
// 			flipTestimonial();
// 		}else if(slideIndex = slides.length-1){
// 			slideIndex = 0;
// 			flipTestimonial();
// 		}
// 			//dots[slideIndex].classList.add("active");
// 		//	slides[slideIndex].style.display="block";
// 		//	slides[slideIndex].style.opacity=1;
// 		}

// 		window.location="#testimonials";
// 	}


// }








//events
moreButton.addEventListener('click', readMore);
lessButton.addEventListener('click', readMore);

dots.forEach(dot => dot.addEventListener('click', showSlides));



