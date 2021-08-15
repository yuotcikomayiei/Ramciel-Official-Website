
let firstName = document.querySelector('#inputFirstName')
let lastName = document.querySelector('#inputLastName')
let email = document.querySelector('#inputEmail')
let password = document.querySelector('#inputPassword')
let confirmPassword = document.querySelector('#confirmPassword')


// firstNameErrorMsg = "First Name cannot be empty";
// lastNameErrorMsg = "Last Name cannot be empty";
// emailErrorMsg = "First Name cannot be empty";
// passwordErrorMsg = "password must be at least 6 characters long";
// confirmPasswordErrorMsg = "Passwords do not match";



let firstNameErrorHolder = document.querySelector('#firstNameError')
let lastNameErrorHolder = document.querySelector('#lastNameError')
let emailErrorHolder = document.querySelector('#emailError')
let passwordErrorHolder = document.querySelector('#passwordError')
let confirmPasswordErrorHolder = document.querySelector('#confirmPasswordError')



// events listeners
firstName.onchange = (e) => {
    firstNameErrorHolder.textContent = validateFirstName(e.target.value)
} 

lastName.onchange = e => {
    lastNameErrorHolder.textContent = validateLastName(e.target.value)
}
email.onchange = e => {
    emailErrorHolder.textContent = validateEmail(e.target.value)
}

password.onchange = e => {
    passwordErrorHolder.textContent = validatePassword(e.target.value)
}

confirmPassword.onchange = e => {
    confirmPasswordErrorHolder.textContent = validateConfirmPassword(e.target.value, password.value)
}

// validation functions

function validateForm(form) {
    console.log("validateForm function");
    let fail = ""
    fail = validateFirstName(firstName.value)
    fail += validateLastName(lastName.value)
    fail += validatePassword(password.value)
    fail += validateConfirmPassword(confirmPassword.value, password.value)
    fail += validateEmail(email.value)

    if (fail == "")
        return true
    else { alert(fail); return false }
}



function validateLogin(form) {
    console.log("validate Login function");
    let fail = ""
    fail += validatePassword(password.value)
    fail += validateEmail(email.value)
    if (fail == "")
        return true
    else { alert(fail); return false }
}


function validateFirstName(field) {
    if (field == "") return "First name cannot be empty.\n"
    else if(field.length < 2) return "Name cannot be one character\n"
    else if (/[^a-zA-Z-]/.test(field))
        return "Name can contain only letters\n"
    else return ""
}

function validateLastName(field) {
    if (field == "") return "last name cannot be empty.\n"
    else if (field.length < 2) return "Name cannot be one character\n"
    else if (/[^a-zA-Z-]/.test(field))
        return "Name can contain only letters\n"
    else return ""
}

function validateUsername(field) {
    if (field == "") return "No Username was entered.\n"
    else if (field.length < 5)
        return "Username must be at least 5 characters.\n"
    else if (/[^a-zA-Z0-9_-]/.test(field))
        return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
    return ""
}

function validatePassword(field) {
    console.log("called");

    if (field == "") return "Password cannot be empty.\n"
    else if (field.length < 6)
        return "Passwords must be at least 6 characters.\n"
    else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
        return "Passwords require one each of a-z, A-Z and 0-9.\n"
    return ""
}

function validateConfirmPassword(cp, p) {
    console.log("called");

    if (cp == "") return "Password cannot be empty.\n"
    else if (cp != p) return "Passwords do not match\n"
    return ""
}


function validateEmail(field) {
    console.log("called");

    if (field == "") return "No Email was entered.\n"
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
        return "The Email address is invalid.\n"
    return ""
}


