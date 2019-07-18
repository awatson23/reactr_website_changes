//checks if browser is internet explorer, shows pop up

var ba = ["MSIE", "Trident", "Edge"]; //IE user agents
var ua = navigator.userAgent,
		popUp = document.querySelector("#ieAlert"),
		popUpClose = popUp.querySelector("#ieClose"),
		popUpButton = popUp.querySelector(".button");


//loop through user agent and search for IE browser names
for(var i = 0; i < ba.length; i++){

    if(ua.indexOf(ba[i]) > -1){ //if index returns as -1, it is not in the array, and th browser is NOT IE.
			//display pop up that tells user to switch to a better browser
    	popUp.style.display = "block";
    }
}



//event listeners
popUpClose.addEventListener('click', function(){
	popUp.style.display = "none";
});

popUpButton.addEventListener('click', function(){
	popUp.style.display = "none";
});
