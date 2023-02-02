// Validating the form
const name = document.getElementByID("fname")
const email = document.getElementByID("email")
const mobileNo = document.getElementByID("mobileNo")
const password = document.getElementByID("psswrd")
const confirm_passwrd = document.getElementByID("conpsswrd")
const form = document.getElementByID("form")
const error = document.ElementByID("error")

//Formula to get message
form.addEventListener("submit", (x) => {
	let message = []
	if (fname.value === "" || fname.value == null) {
			message.push("Forgot to enter Full name") //If the Full name label wasn't filled
	}
	if (fname.value === "" || fname.value == text) {
		message.push("Incorrect Full name") //If the Full name has and integer
	}
	
	if (email.value === "" || email.value !== @) {
		message.push("Forgot to add the @ Symbol") //If the @ symbol was forgotten
	}
	
	if (mobileNo.value === "" || mobileNo.value == int) {
		message.push("Forgot to enter your Mobile Number") //If the Number label wasn't filled
	}
	if (mobileNo.value === "" || mobileNo.value == int) {
		message.push("Incorect Mobile Number name") //If the Number has and integer
	}

	if (psswrd.value === "" || psswrd.value !== int) {
		message.push("Forgot to Enter Password") //If the Password was forgotten
	}
	if (conpsswrd.value === "" || conpsswrd.value == int) {
		message.push("Incorect Pssword Entered") //If the Password was enetered incorrectly
	}
	
	if (message.length > 0) {   // Incase there are more than 1 error message
	x.preventDefault()
	errorElement.innerText = message.join(" , ")  //Seperate the error message
	}
}

// Validating the form
const username = document.getElementByID("username")
const password = document.getElementByID("psswrd")
const form = document.getElementByID("form")
const error = document.ElementByID("error")

//Formula to get message
form.addEventListener("submit", (x) => {
	let message = []
	if (username.value === "" || username.value == null) {
			message.push("Forgot to enter Username") //If the User name name label wasn't filled
	}
	if (fname.value === "" || fname.value == text) {
		message.push("Incorrect Username") //If the Full name has and integer
	}

	if (psswrd.value === "" || psswrd.value !== int) {
		message.push("Forgot to Enter Password") //If the Password was forgotten
	}
	
	if (message.length > 0) {   // Incase there are more than 1 error message
	x.preventDefault()
	errorElement.innerText = message.join(" , ")  //Seperate the error message
	}
}