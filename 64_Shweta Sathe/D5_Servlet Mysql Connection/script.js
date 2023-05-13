// JavaScript code for form validation
function validateForm() {
	var name = document.forms["addStudentForm"]["name"].value;
	var email = document.forms["addStudentForm"]["email"].value;
	var phone = document.forms["addStudentForm"]["phone"].value;
	var address = document.forms["addStudentForm"]["address"].value;

	if (name == "") {
		alert("Name must be filled out");
		return false;
	}

	if (email == "") {
		alert("Email must be filled out");
		return false;
	}

	if (phone == "") {
		alert("Phone must be filled out");
		return false;
	}

	if (address == "") {
		alert("Address must be filled out");
		return false;
	}
}

// JavaScript code for confirming record deletion
function confirmDelete() {
	return confirm("Are you sure you want to delete this record?");
}