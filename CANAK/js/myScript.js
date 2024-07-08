function loadData(name){
	if (name == "btn1"){
		document.getElementById("para").innerHTML = "Learning Space";
		document.getElementById("image").src = "image/image 2.jfif";
		document.getElementById("para").innerHTML = "Learning Space";
	}
	
	else if (name == "btn2"){
		document.getElementById("para").innerHTML = "Discussion Space";
		document.getElementById("image").src = "image/image 3.jfif";
	}

	else {
		alert("Invalid!!!");
	}
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('date-display').textContent = new Date().toDateString();
});

document.addEventListener('DOMContentLoaded', function() {
    const seats = document.querySelectorAll('.seat');
    const resetButton = document.getElementById('reset');

    seats.forEach(seat => {
        seat.addEventListener('click', function() {
            if (!this.classList.contains('selected') && document.querySelectorAll('.selected').length >= 2) {
                alert('You can only select up to two seats.');
                return; // Prevent selecting more than two seats
            }
            this.classList.toggle('selected');
        });
    });

    resetButton.addEventListener('click', () => {
        seats.forEach(seat => {
            seat.classList.remove('selected');
        });
    });
});

