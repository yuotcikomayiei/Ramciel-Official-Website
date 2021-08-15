

let email = document.querySelector('#inputEmail')
let password = document.querySelector('#inputPassword')



emailErrorMsg = "Email cannot be empty";
passwordErrorMsg = "password cannot be empty";


let errorHolder = document.querySelector('#error')
// let passwordErrorHolder = document.querySelector('#passwordError')


// email.onchange = e => {
//     emailErrorHolder.textContent = validateEmail(e.target.value)
// }

// password.onchange = e => {
//     passwordErrorHolder.textContent = validatePassword(e.target.value)
// }

// validation functions

function validateLogin(form) {
    console.log("validate Login function");
    let fail = ""
    fail += validatePassword(password.value)
    fail += validateEmail(email.value)
    if (fail == "")
        return true
    else {
        errorHolder.textContent = "invalid username or password";
        alert(fail);
        return false
    }
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

    return (field == "") ? "Password cannot be empty.\n" : "";

}



function validateEmail(field) {
    console.log("called");

    if (field == "") return "No Email was entered.\n"
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
        return "The Email address is invalid.\n"
    return ""
}


