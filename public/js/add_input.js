		//clickables
var addT = document.querySelector("#addTeam"),
		addF = document.querySelector("#addFeat"),
		addG = document.querySelector("#addGallery"),
		multiUpload = document.querySelector(".multiUpload"),

		//sections to append new inputs to
		teamContent = document.querySelector(".addMembers"),
		featContent = document.querySelector(".newProjFeatures"),
		galleryContent = document.querySelector(".newProjGallery"),

		dynamicSections = document.querySelectorAll(".dynamicSection"),

		//inputs to clone for each section
		teamInput = document.querySelector(".styledSelect"),
		featInput = document.querySelector(".featureInfo"),
		galleryInput = document.querySelector(".galleryFile"),
		galleryOriginal = document.querySelector("#projGalleryImg"),

		//classes to add to cloned inputs for styling, etc.
		featClass = "featureInfo",
		teamClass = "selectContainer",
		galleryClass = "galleryFile",

		//leave empty to reset after each function run- stays empty for next clone
		addInput= "",
		noLink = "",

		//list to populate with file names for multi-upload button (gallery)
		fileNames = document.querySelector("#fileNames"),
		fileNamesList = document.querySelector("#fileNames ul"),

		//the actual filed placed into the gallery input
		files = document.querySelector("#projGalleryImg").files;




//create div to hold new input
	function createInput(section){

		addInput = document.createElement('div');
		noLink = document.createElement('a');
		section.appendChild(addInput);

	}



//add markup for form input into new div
//section to append to, class name, input selection
	function newInput(section, cl, inpt){

		createInput(section);
		var cln = inpt.cloneNode(true);

		addInput.classList.add(cl);

		 noLink.href="#";
		 noLink.innerHTML = "-remove";

		addInput.appendChild(cln);
		addInput.appendChild(noLink);

		//IMPORTANT for remove link functionality
		noLink.classList.add("remove");

		//clear input in text field clones
		var clnval = cln.querySelectorAll(".featClone");
		console.log(clnval);
		clnval.forEach(cval => cval.value = "");

		//reset addInput for next creation
		addInput = "";
		noLink = "";

	}



//remove last added input
	// function removeInput(e){

	// 	//e.target.parentNode.lastChild.remove();
	// 	console.log(loseInputs);
	// 	console.log(e.target.parentNode);
	// 	//e.target.parentNode.remove();
	// 	//this.parentNode.remove();

	// }



function removeInput(e){

	//run function ONLY if you have clicked on an 'a' tag with class of remove
	if(e.target && e.target.tagName == "A" && e.target.classList.contains("remove")){
		e.preventDefault();

		console.log("we clicked the right thing!");
		e.target.parentNode.remove();
	}

}





//event listener for each -remove link
	dynamicSections.forEach(section => section.addEventListener('click', removeInput));

	//dynamicSections are the entire section containing the dynamic content (add/remove links and inputs). The event listener was added to those
	//because with links being added/removed all the time, you can't stick the event listener on to them directly since sometimes they don't exist



//event listeners for each +add input link
	addT.addEventListener('click', function(e){
			e.preventDefault();
			newInput(teamContent, teamClass, teamInput);
	});


	addF.addEventListener('click', function(e){
			e.preventDefault();

			featCount = Array.from(document.querySelectorAll(".featureInfo"));

			//adds a max amount of feature inputs allowed
			if(featCount.length < 6){
			newInput(featContent, featClass, featInput);
		}

	});


	// addG.addEventListener('click', function(e){
	// 		e.preventDefault();
	// 		newInput(galleryContent, galleryClass, galleryInput);
	// });


//image upload click for gallery
function galleryClick(e){
	//looking for fontawesome element
	if(e.target && e.target.classList.contains("fas")){
		console.log("clicked");

		galleryOriginal.click();
	}
}


function listAnimation(){
  var itms = Array.from(document.querySelectorAll(".fileItm"));
  itms.forEach(itm=>itm.classList.add("slideIn"));
	//animations can be found at the top of the CSS file
}



function listFiles(){

  if(this.files && this.files.length > 1){
    fileNamesList.innerHTML = "<li class='first'>" + this.files.length + " files selected </li>" ;
    for(var i = 0; i<files.length; i++){
      fileNamesList.innerHTML +="<li class='fileItm'>" + files[i].name.split('\\').pop() + "</li>";
    }

    listAnimation();
		//this doesn't work on chrome for some reason
  }
}


multiUpload.addEventListener('click', function(e){
	galleryClick(e);
});

galleryOriginal.addEventListener('change', listFiles);


















	//check if add to home page is checked

	var heroCheckBox = document.querySelector("#heroCheck"),
		heroInput = document.querySelector("#homeImage");



	heroCheckBox.addEventListener('change', function(){

		heroInput.classList.remove("slideDown");
		heroInput.classList.remove("slideUp");

		//show image input ONLY if checked
		if(this.checked){

			heroInput.style.display = "block";
			heroInput.classList.add("slideDown");
			heroInput.style.maxHeight="none";
			heroInput.style.opacity = 1;


		}else{


			heroInput.classList.add("slideUp");
			heroInput.style.maxHeight= 0;
			heroInput.style.opacity = 0;

			//take out invisible input after animation
			setTimeout(function (){
				heroInput.style.display = "none";
			}, 300);

		}
	});









	var upDiv = document.querySelectorAll(".fileContainer"),
			Inpts = document.querySelectorAll(".fileContainer input"),
			frm = document.querySelector("#newProject form"),
			upInpt = "",
			upFile = "";


			function inptClck(e){

				upInpt = e.currentTarget.querySelector("input");
				//upInptGallery = e.currentTarget.querySelector(".fileContainer");
				upLbl = e.currentTarget.querySelector("label");
				upInpt.click();



			}


			function inptChng(e){

			//	upFile = upInpt.value.split("\\").pop();
			console.log(e.currentTarget.value.split("\\").pop());
			//	upLbl.innerHTML = upFile + '<i class="fas fa-check-circle"></i>';
			//	upFile = "";

			}



frm.addEventListener('click', function(e){

	if(e.target && e.target.tagName == "div" && e.target.classList.contains("fileContainer")){
		inptClck(e);
		console.log("clicked");

		// upInpt.addEventListener('change', function(){
		// 	console.log("changed" + upInpt.value);
		// 	//upLbl.innerHTML = upInpt.value;
		// 	inptChng(e);
		// });
	}
});

Inpts.forEach(inpt => inpt.addEventListener('change', function(e){
	inptChng(e);
}))



	// upDiv.forEach(upD => upD.addEventListener('click', function(e){
	//
	// 	inptClck(e);
	// 	console.log("clicked input: " + upInpt.name);
	//
	// }));

// Inpts.forEach(inpt => inpt.addEventListener('change', function(e){
//
// 	inptChng(e);
//
// }));
