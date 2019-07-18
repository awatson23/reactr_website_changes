//main reactr site file upload functionality

var fileInput = document.querySelector("#resumeInput"),
		fileLabel = document.querySelector("#resumeLabel"),
		fileName = "";


//resume upload function
function changeFileName(e){

	//takes filename from end of path entered into input and places it in label
  fileName = e.target.value.split("\\").pop();
  fileLabel.innerHTML = fileName + '<i class="fas fa-check-circle"></i>';
}



//activate file input when label is clicked
function clickInput(){
	fileInput.click();
}



//event listeners	  
fileLabel.addEventListener('click', clickInput);
fileInput.addEventListener('change', changeFileName);
