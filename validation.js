document.addEventListener('DOMContentLoaded', function() {
    var emailInput = document.getElementById('email');
    var smallElement = document.getElementById('small');

    var passInput = document.getElementById("pass");
    var smallPass = document.getElementById("passError");

    emailInput.addEventListener('input', function() {
        var emailRegex = /^(?!\.)([a-z\d\.-]{1,64})@([a-z\d]+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/m;
        var isEmailValid = emailRegex.test(emailInput.value);
        if (isEmailValid) {
            smallElement.textContent = 'Email is valid';
            smallElement.style.color = 'green';
        } else {
            smallElement.textContent = 'Please enter a valid email';
            smallElement.style.color = 'red';
        }
    });


    passInput.addEventListener('input',function(){
        var passRegex = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m;
        var isPasswordValid = passRegex.test(passInput.value);

        if(isPasswordValid){
            smallPass.textContent = "Password is valid";
            smallPass.style.color = "green";
        }
        else{
            smallPass.textContent = "Please enter a valid password";
            smallPass.style.color = "red";
        }
    });
});