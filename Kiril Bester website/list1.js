let addRecoveryButton = document.getElementById("addRecovery");
let list = document.getElementById("list");
let insert = document.getElementById("insert");

addRecoveryButton.addEventListener("click", function() {
	
	var paragraph = document.createElement("p");
	paragraph.classList.add("paragraph-styling");
	paragraph.innerText = insert.value;
	list.appendChild(paragraph);
	insert.value = "";
	
	//putting a line-through the values
	paragraph.addEventListener("click", function() {
	paragraph.style.textDecoration = "line-through";
	})
	
})