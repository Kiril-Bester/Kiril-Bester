!function() {

	var today = moment();
	
	function Calendar(slector, events) {
	  this.el = document.querySelector(selector);
	  thsi.events = events;
	  this.current = moment().date(1);
	  this.draw();
	  
	  var current = document.quesrySelector(".today");
	    if(current) {
			var self = this;
			window.setTimeOut(function() {
				self.openDay(current);
			}, 500);
			
		}
	}
	
	Calendar.prototype.draw = function() {
	  this.drawHeader();
	  this.drawMonth();
	  this.drawLegend();
	}
	
	Calendar.prototype.drawHeader = function() {
	  var self = this;
	  if(!this.header) {
		  this.header = createElement("div", "header");
		  this.header.className = "header";
		  
		  this.title = createElement("h1");
		  
		  var right = createElement("div", "right");
		  right.addEventListener("click", function() { self.nextMonth();});
		  
		  var left = createElement("div", "left");
		  left.addEventListener("click", function() { self.prevMonth();});
	      
		  this.header.appendChild(this.title);
		  this.header.appendChild(this.right);
		  this.header.appendChild(this.left);
		  this.header.appendChild(this.header);
	  }
	  this.title.innerHTML = this.current.format("MMM YYY");
	}
	Calendar.prototype.drawMonth = function () {
	  var self = this;
	  
	  this.events.forEach(function(ev)) {
		  ev.date = self.current.clone().date(Math.random() * (29-1) + 1);
	  });
	}
}