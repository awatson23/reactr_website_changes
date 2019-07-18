
var hamburger = document.querySelector(".hamburgerContainer"),
		navContainer = document.querySelector("#mainNav"),
		navigation = navContainer.querySelector("ul");


//HAMBURGER MENU open/close
function openHamburger(){

		if(hamburger.classList.contains("change")){

			hamburger.classList.remove("change");
			navigation.style.display = "none";
			navContainer.style.width = "auto";
			navContainer.style.position = "static";
			navContainer.style.height = "0vh";

		}else{

			hamburger.classList.add("change");
			navContainer.style.width = "100%";
			navContainer.style.height = "100vh";
			navContainer.style.position = "absolute";
			navContainer.style.right = "0";
			navigation.style.display = "flex";
		}
}


hamburger.addEventListener('click', openHamburger);


//button clicks for all pages
var buttons = Array.from(document.querySelectorAll(".button")),
		buttonLinks = Array.from(document.querySelectorAll(".button a")),
		link = 0;

		function clickButton(e){
			buttons.forEach(button => button.classList.remove("clicked"));
			e.target.classList.add("clicked");
			link = buttons.findIndex(button => button.classList.contains("clicked"));
			buttonLinks[link].click();
		}

		buttons.forEach(button => button.addEventListener('click', clickButton));
