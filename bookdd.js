function getDate(str) {
	console.log("funct1");
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		var resp = this.responseText;
		console.log("funct2" + resp);
		if(this.readyState == 4 && this.status == 200){
			console.log("if" + resp);
			document.getElementById("date").innerHTML = resp;
		}
	};
	xmlhttp.open("GET", "populate_date.php?q=" + str, true);
	xmlhttp.send();
}
function getLocation(d, s) {
	console.log("funct1");
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		var resp = this.responseText;
		console.log("funct2" + resp);
		if(this.readyState == 4 && this.status == 200){
			console.log("if" + resp);
			document.getElementById("location").innerHTML = resp;
		}
	};
	xmlhttp.open("GET", "populate_locaiton.php?d=" + d + "&s=" + s, true);
	xmlhttp.send();
}

function getTeacher(d, s, l) {
	console.log("funct1");
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		var resp = this.responseText;
		console.log("funct2" + resp);
		if(this.readyState == 4 && this.status == 200){
			console.log("if" + resp);
			document.getElementById("teacher").innerHTML = resp;
		}
	};
	xmlhttp.open("GET", "populate_teacher.php?d=" + d + "&s=" + s + "&l=" + l, true);
	xmlhttp.send();
}

