function validateTerm() {
	var termField = document.forms['search']['term'];
	var term = termField.value;

	if (term.length < 3) {
		termField.classList.add('invalid-form');
		return false;
	}
}

function main() {
	var form = document.forms['search'];

	form.onsubmit = function() {
		return validateTerm();
	};
}

window.onload = main;