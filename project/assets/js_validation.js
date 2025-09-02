// Simple JS Validation
function validateForm(formId) {
    let form = document.getElementById(formId);
    let inputs = form.querySelectorAll("input, textarea, select");
    let valid = true;

    inputs.forEach(input => {
        if (input.hasAttribute("required") && input.value.trim() === "") {
            alert(input.name + " is required!");
            valid = false;
        }
    });

    return valid;
}
