// Validating the table
var date = document.querySelectorAll('#date', '#date1', '#date2', '#date3', '#date4', '#date5', '#date6');
var names = document.querySelectorAll('#names', '#names1', '#names2', '#names3', '#names4', '#names5', '#names6');
var excercise = document.querySelectorAll('#excercise', '#excercise1', '#excercise2', '#excercise3', '#excercise4', '#excercise5', '#excercise6');
var calorie = document.querySelectorAll('#calorie', '#calorie1', '#calorie2', '#calorie3', '#calorie4', '#calorie5', '#calorie6');
var wloss = document.querySelectorAll('#wloss', '#wloss1', '#wloss2', '#wloss3', '#wloss4', '#wloss', '#wloss6');
var result = document.getElementByID("result");
var result1 = document.getElementByID("result1");

//Validating date
console.log(
	if (date === short date) {
		day: "2-digit";
		month: "2-digit";
		year: "numeric";
		
		document.getElementById("date").innerHTML = "The date was inserted correctly";
  }; 
	
	else {
		document.getElementById("date").innerHTML = "Date was inserted incorrectly";
		return false;
	});

//Validating names	
var names = /^[a-zA-Z\-\] + $/;
var names = document.getElementByID("names").value;
	if (!names.test(names) {
		alert("Please enter your Name and Surname");
		document.getElementByID("names").focus();
		return false;
	});
	
	else {
		alert("Name and Surname were entered correctly");
		return true;
	}

//Vaidating intake of calories
var calorieIntake = parseInt(calorie);
var calorie = document.getElementByID("calorie").value;	
	if (calorie === parseInt(calorie)) {
		document.getElementById("calorie");
		return true;
	}
	
	else {
		alert("Calorie intake was inserted incorrectly")
		return false;
	}

//Message to show user their calorie status
var caloriestatus = document.getElementByID("caloriestatus").value;
	if (calorie > calorielimit){
		document.getElementById("calorie").innerHTML = "Cannot exceed the limit";
	}
	
	else {
		document.getElementById("calorie").innerHTML = "You entered below the limit";
	}

//Validating weight loss	
var wloss = parseInt(wloss);
var wloss = document.getElementByID("wloss").value;	
	if (wloss === parseInt(wloss)) {
		document.getElementById("wloss");
		return true;
	}
	
	else {
		return 0;
	}

//calculating totals
function total() {
	var arr = document.getElementByID("calorie")
	var tot = 0;
		for(var i=0; i<arr.length; i++) {
			if (parseInt(arr[i].value);
		}
	
}
	document.getElementByID("result").value = tot;
	document.getElementByID("result1").value = tot;




