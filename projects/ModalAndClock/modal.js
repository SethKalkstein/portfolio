
function createModal(){
	//variables representing different html elements in the modal and the modal itself
	var theModal = document.createElement("div");
	var modalExitButton = createExitButton(); //div created by the createExitButton() function
	var boxText = document.createElement("p");
	var boxLink = document.createElement("a");
	//styling for the modal box itself
	theModal.style.width = "300px";
	theModal.style.height = "130px";
	theModal.style.backgroundColor = "white";
	theModal.style.border= "1px solid black";
	theModal.style.position = "absolute";
	theModal.style.top = "100px";
	theModal.style.right = "200px"
	theModal.style.borderRadius = "5px";
	//adds an event listener to the exit button (the button itself is styled in its own function) CLicking the exit button makes the modal disapear
	modalExitButton.addEventListener("click",function(){
		theModal.style.display = "none";
	})
	//styling (and content) for the text in the box
	boxText.innerHTML = "anim id est laborum. Lorem ipsum dolorlore mlorem est laborum. Lorem ipsum dolorlorem.";
	boxText.style.padding = "10px";
	//styling for the link which takes you to the clock page	
	boxLink.setAttribute("href", "index.html");
	boxLink.innerHTML = "Click here to go to the clock";
	boxLink.style.padding = "10px";
	//attach the modal to the document and the modal's element to the modal
	document.body.appendChild(theModal);
	theModal.appendChild(modalExitButton);
	theModal.appendChild(boxText);
	theModal.appendChild(boxLink);
}

 function createExitButton(){
 	var theExitButton = document.createElement("div");
 	//button styling
 	theExitButton.style.width = "15px";
 	theExitButton.style.height = "17px";
 	theExitButton.style.borderLeft = "1px solid black";
 	theExitButton.style.borderBottom = "1px solid black";
	theExitButton.style.position = "relative";
	theExitButton.style.float = "right";
	theExitButton.style.paddingLeft = "3px";
	//button content
	theExitButton.innerHTML = "X";
	//hover effect 
	theExitButton.addEventListener("mouseover",function(){
		theExitButton.style.cursor= "pointer";
	})

 	return theExitButton;
 }
//function to set the timeout for the creation of the modal
function modalPopup(){
	setTimeout(createModal, 2000)
}
//add an event listener to the page upon loading
window.addEventListener("load", modalPopup);