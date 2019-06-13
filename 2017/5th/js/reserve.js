
// Cache the form element and add an event listener
var form = document.getElementById("reservation-form");
form.addEventListener("submit", checkInfo);

function checkInfo(e) {

	// Prevents the form from being submitted without checking the data
	e.preventDefault();

	// Caching form elements
	var firstname = document.forms["create"]["first-name"].value;
	var lastname = document.forms["create"]["last-name"].value;
	var email = document.forms["create"]["email"].value;
	var people = document.forms["create"]["people"].value;
	var date = document.forms["create"]["date"].value;
	var time = document.forms["create"]["time"].value;

	// Caching input-block elements
	var $firstName = $("#first-name");
	var $lastName = $("#last-name");
	var $email = $("#email");
	var $people = $("#people");
	var $date = $("#date");
	var $time = $("#time");

	// Flag that changes if an error is found
	var noErrors = true;

	if (firstname == null || firstname == "") {
		$firstName.addClass("error");
		noErrors = false;
	} else {
		$firstName.removeClass("error");
	}

	if (lastname == null || lastname == "") {
		$lastName.addClass("error");
		noErrors = false;
	} else {
		$lastName.removeClass("error");
	}

	if (email == null || email == "") {
		$email.addClass("error");
		noErrors = false;
	} else {
		//Check that email is in valid format
		var emailRegex = new RegExp(/\S+@\S+\.\S+/);
		var emailValid = emailRegex.test(email);
		if (!emailValid) {
			$email.addClass("error");
			noErrors = false;
		} else {
			$email.removeClass("error");
		}
	}

	if (people == null || people == "") {
		$people.addClass("error");
		noErrors = false;
	} else if (people <= 0) {
		$people.addClass("error");
		noErrors = false;
	} else {
		$people.removeClass("error");
	}

	if (date == null || date == "") {
		$date.addClass("error");
		noErrors = false;
	} else {
		$date.removeClass("error");
	}

	if (time == null || time == "") {
		$time.addClass("error");
		noErrors = false;
	} else {
		$time.removeClass("error");
	}

	if (!noErrors) {
		$("#error-message").css("display", "inherit")
	}

	// Submit form if no errors were found
	if (noErrors) {
		form.submit();
	}
}
