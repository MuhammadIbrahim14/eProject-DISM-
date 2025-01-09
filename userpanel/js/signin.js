// SIGNIN FORM VALIDATION

function validateForm(event) {

    event.preventDefault();
  
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Minimum 8 characters, at least one letter and one number
  
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('password-error');
  
    emailError.textContent = '';
    passwordError.textContent = '';
  
    let valid = true;
  
    if (!emailRegex.test(email)) {
        emailError.textContent = 'Please enter a valid email address.';
        valid = false;
    }
  
    if (!passwordRegex.test(password)) {
        passwordError.textContent = 'Password must be at least 8 characters long and contain both letters and numbers.';
        valid = false;
    }
  
    if (valid) {
        alert('Form is valid. You can proceed with the form submission.');
        
    }
  }