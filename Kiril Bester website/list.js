let addExcerciseButton = document.getElementById("addExcercise");
let list = document.getElementById("list");
let insert = document.getElementById("insert");

addExcerciseButton.addEventListener("click", function() {
	
	var paragraph = document.createElement("p");
	paragraph.classList.add("paragraph-styling");
	paragraph.innerText = insert.value;
	list.appendChild(paragraph);
	insert.value = "";
	
	//removing values
	paragraph.addEventListener("click", function() {
		paragraph.style.textDecoration = "line-through";
	})
	
	paragraph.addEventListener("dblclick", function() {
		list.removeChild(paragraph);
	})
})
