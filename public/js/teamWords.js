//testimonial slideshow functionality
class SiemaWithDots extends Siema {

	addDots() {
	  // create a contnier for all dots
	  // add a class 'bullets' for styling reason
	  this.bullets = document.querySelector('#teamBullets');

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

	selector: '#wordsFromTeam',
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

// OLD AND NOT WORKING PROPERLY VERSION

//testimonial scrolling for team page

// var words = Array.from(document.querySelectorAll(".wordsContainer")),
//     wordsIndex = 0,
//     wordBulletsContainer = document.querySelector("#teamBullets");




// var emptyBullets = "";

// for(var i=0; i<words.length; i++){
//     emptyBullets += "<div class='dot'></div>";
// }


// wordBulletsContainer.innerHTML = emptyBullets;

// var wordDots = Array.from(wordBulletsContainer.querySelectorAll(".dot"));



//set first slide
// words[0].style.opacity="1";
// wordDots[0].classList.add("active");

// wordsIndex = wordDots.findIndex(wordDot => wordDot.classList.contains("active"));
// //console.log(slideIndex);
// let changeWords = setInterval(wordsTimer, 5000);


//set timer for slides change every 5s
// function wordsTimer(){

//         wordDots.forEach(wordDot => wordDot.classList.remove('active'));
//         words.forEach(word => word.style.opacity = 0);

//         if(wordsIndex < words.length-1){

//             wordsIndex++;

//         }else if(wordsIndex >= words.length-1){

//              wordsIndex = 0;
//         }

//         //console.log("slide index TIMER: " + slideIndex);

//         wordDots[wordsIndex].classList.add("active");
//         words[wordsIndex].style.display="block";
//         words[wordsIndex].style.opacity=1;

// }


//change slide on bullet click
// function showWords(e){
//     words.forEach(word => word.style.opacity = 0);

//     wordDots.forEach(wordDot => wordDot.classList.remove('active'));
//     e.target.classList.add('active');
//     wordsIndex = wordDots.findIndex(wordDot => wordDot.classList.contains("active"));

//     words[wordsIndex].style.display="block";
//     words[wordsIndex].style.opacity=1;
// }



// wordDots.forEach(wordDot => wordDot.focus());

// wordDots.forEach(wordDot => wordDot.addEventListener('click', showWords));




// if(window.innerWidth < 900){
//
// 	var touchstartX = 0,
// 		touchendX = 0;
// 		//may need to change container to forEach => image
// 		words.forEach(word => word.addEventListener('touchstart', function(e){
// 		touchstartX = e.changedTouches[0].screenX;
// 	}));
//
// 		words.forEach(worde => word.addEventListener('touchend', function(e){
// 		touchendX = e.changedTouches[0].screenX;
// 		readSwipe();
// 	}));
//
// 	function readSwipe(){
//
// 		words.forEach(word => word.style.opacity = 0);
//
// 		wordDots.forEach(wordDot => wordDot.classList.remove('active'));
//
// 		if(touchendX < touchstartX){
//
// 			wordsIndex --;
// 			wordDots[wordsIndex].classList.add("active");
// 			words[wordsIndex].style.display="block";
// 			words[wordsIndex].style.opacity=1;
//
// 		}else if(touchendX > touchstartX){
//
// 			wordsIndex ++;
// 			wordDots[wordsIndex].classList.add("active");
// 			words[wordsIndex].style.display="block";
// 			words[wordsIndex].style.opacity=1;
// 		}
// 	}
//
//
// }
