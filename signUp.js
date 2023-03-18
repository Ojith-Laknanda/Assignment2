const form = document.getElementById("form");
const first_name = document.getElementById("first_name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("email");
const password = document.getElementById("pw");
const password2 = document.getElementById("repw");

form.addEventListener("signIn", (e) => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = message;
    inputControl.classList.add("error");
    inputControl.classList.remove("success");
};

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = "";
    inputControl.classList.add("success");
    inputControl.classList.remove("error");
};

const isValidEmail = (email) => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
    const first_nameValue = first_name.value.trim();
    const last_nameValue = last_name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if (first_nameValue === "") {
        setError(first_nameValue, "Username is required");
    } else {
        setSuccess(first_nameValue);
    }
    if (last_nameValue === "") {
        setError(last_nameValue, "Username is required");
    } else {
        setSuccess(last_nameValue);
    }

    if (emailValue === "") {
        setError(email, "Email is required");
    } else if (!isValidEmail(emailValue)) {
        setError(email, "Provide a valid email address");
    } else {
        setSuccess(email);
    }

    if (passwordValue === "") {
        setError(password, "Password is required");
    } else if (passwordValue.length < 8) {
        setError(password, "Password must be at least 8 character.");
    } else {
        setSuccess(password);
    }

    if (password2Value === "") {
        setError(password2, "Please confirm your password");
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }
};