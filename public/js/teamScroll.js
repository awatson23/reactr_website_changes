//add side scroll to team members on project detail page when more than 4.
//it is just missing alignment- scroll works fine


var left = document.querySelector("#teamLeft"),
	  right = document.querySelector("#teamRight"),
	  teamContainer = document.querySelector("#teamMembers"),
    memberContainer = document.querySelector("#memberContainer"),
	  pixels = 0,
	  members = Array.from(document.querySelectorAll(".member")),

		//width of container holding all members - width of team members in visible area = space you can move
    moveableWidth = memberContainer.offsetWidth - teamContainer.offsetWidth;

    console.log(-moveableWidth);



		//do not show arrowa if there are only 4 members or less
	if(members.length <= 4){
		left.style.display = "none";
		right.style.display = "none";
    teamContainer.style.width = "auto";
	}



	//scroll right
	function rightMove(px){

		//only scroll if container has not reached its end
    if(-moveableWidth < pixels-100){
			pixels -= 280; //offset pixels by width of one team member
			memberContainer.style.transform = "translateX(" + pixels + "px)"; //move container x amount of pixels to the right
  }
		console.log(pixels);
	}



//scroll left
	function leftMove(px){
		//make sure container is not at beginning
    if(pixels < 0){
		    pixels += 280; //subtract width of one team member
		      memberContainer.style.transform = "translateX(" + pixels + "px)"; //move total width left
  }

		console.log(pixels);
	}


//event listeners
	right.addEventListener('click', rightMove);
	left.addEventListener('click', leftMove);
