let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
	var height = document.getElementById("height").value;
	var weight = document.getElementById("weight").value;
	var bmi = weight/(height/100*height/100);
	var bmio = bmi.toFixed(2);
	var result = document.getElementById("result");
	let height_value = false, weight_value = false; //link with span in HTML
	
	if (height === "" || (height <= 0)) {
		document.getElementById("height_false").innerHTML = "Insert height correctly";
	}
	else {
		document.getElementById("height_false").innerHTML = ""; //only if height_value is true
		height_value = true;
	}
	
	if (weight === "" || (height <= 0)) {
		document.getElementById("weight_false").innerHTML = "Insert weight correctly";
	}
	else {
		document.getElementById("weight_false").innerHTML = ""; //only if weight_value is true
		weight_value = true;
	}
	
	// checking if both height and weight values are true
	if (height_value && weight_value) {
		if (bmi < 18.5) {
			result.innerHTML = "Your result is Underweight" + bmio;
		}
		else if (bmi >= 18.5 && bmi <= 25) {
			result.innerHTML = "Your result is Normal" + bmio;
		}
		else if (bmi >= 25 && bmi <= 30) {
			result.innerHTML = "Your result is Just Overweight" + bmio;
		}
		else if (bmi >= 30 && bmi <= 35) {
			result.innerHTML = "Your result is Obese Class 1" + bmio;
		}
		else if (bmi >= 35 bmi <= 40) {
			result.innerHTML = "Your result isObese Class 2" + bmio;
		}
		else {
			result.innerHTML = "Your result is Obese Class 3" + bmio;
		}
//if calculations were incorrect
	else {
		alert("BMI was calculated incorrectly");
		result.innerHTML = "";
	}
	}
});