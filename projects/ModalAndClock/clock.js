var currentHour = document.getElementById("hours")
var currentSecond = document.getElementById("seconds")
var currentMinute = document.getElementById("minutes")
var currentAmPm = document.getElementById("ampm")
var mainBack = document.getElementsByTagName("main")[0];
var mainBody = document.getElementsByTagName("body")[0];
var headerLink1 = document.getElementsByTagName("a")[0];
var headerLink2 = document.getElementsByTagName("a")[1];

var intervalID = setInterval(addTimeHTML, 1000);

//extend Date class to return whether current time is am or pm
Date.prototype.amPm = function () {
	if (this.getHours() <= 11 ){
		return "am";
	}
	else {
		return "pm";
	}
}
//extend Date class to give hours in 12 hour format
Date.prototype.hoursAmPm = function () {
	if (this.getHours() == 0 ){
		return 12;
	}
	else if (this.getHours() >= 12) {
		return this.getHours() - 12;
	}
	else {
		return this.getHours();
	}
}

//function to set the current time every second
function addTimeHTML(){
	//variable to store the date object (current as of the interval set by the SetInterval function that the intervalID has been set equal to)
	var rightNow = new Date();
	//sets seconds
	if (rightNow.getSeconds() <=9 ){
		//makes the clock display as "09", "07", "04", etc... instead of "9", "7", "4", etc... so that there will be a consistant look to the clock
		currentSecond.innerHTML = "0"+rightNow.getSeconds();	
	}
	else{
		currentSecond.innerHTML = rightNow.getSeconds();
	}
	//sets minutes
	if (rightNow.getMinutes()<=9){
		//does the same as above for minutes as was done for seconds so that a zero will display in front of any single digit value
		currentMinute.innerHTML = "0"+rightNow.getMinutes();	
	}
	else{
		currentMinute.innerHTML = rightNow.getMinutes();
	}
	//displays hours in 12 hour format
	currentHour.innerHTML = rightNow.hoursAmPm();
	//displays am or pam
	currentAmPm.innerHTML = rightNow.amPm();
	//calls the function to change the background color
	changeBackground(rightNow.getHours(), rightNow.getMinutes(), rightNow.getSeconds());
}
//changes backgroung color based on the time of day
function changeBackground (hour, minute, second) {
	//concatonates # with hour, minute, and second to provide a format that works in css for hex colors, it will follow the format #HHMMSS 
	hexBackgroundColorFormat = "#" + stringChanger(hour) + stringChanger(minute) + stringChanger(second);
	//changes css color property for background color, main body text, and a couple of header links
	mainBack.style.backgroundColor = hexBackgroundColorFormat;
	mainBody.style.color = hexBackgroundColorFormat;
	headerLink1.style.color = hexBackgroundColorFormat;
	headerLink2.style.color = hexBackgroundColorFormat;
}
//changes time value (for minute, second or 24 format hour) to a string
function stringChanger (timeVar){
	//make sure all numbers are two digits
	if (timeVar < 10){
		//concatonates a zero preceding the number if it is a single digit and stores as string data type
		timeVar = "0"+timeVar.toString();
	}
	else{
		//converts to string datatype if number is already two digits
		timeVar = timeVar.toString();
	}
	//returns number as 2 character string 
	return timeVar;
}