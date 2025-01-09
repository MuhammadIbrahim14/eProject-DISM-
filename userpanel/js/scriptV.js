
// Home Section Start


let slides = document.querySelectorAll('.home .slide');
let index = 0;

function next(){
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

function prev(){
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
};



// SIGN UP FORM VALIDATION

function validateForm(event) {
  // Prevent form submission
  event.preventDefault();

  const firstName = document.getElementsByName('firstName')[0].value;
  const lastName = document.getElementsByName('lastName')[0].value;
  const email = document.getElementsByName('email')[0].value;
  const password = document.getElementsByName('password')[0].value;
  const confirmPassword = document.getElementsByName('confirmPassword')[0].value;
  const termsChecked = document.getElementsByName('terms')[0].checked;

  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // At least 8 characters, 1 letter and 1 number

  const firstNameError = document.getElementById('firstNameError');
  const lastNameError = document.getElementById('lastNameError');
  const emailError = document.getElementById('emailError');
  const passwordError = document.getElementById('passwordError');
  const confirmPasswordError = document.getElementById('confirmPasswordError');
  const termsError = document.getElementById('termsError');

  firstNameError.textContent = '';
  lastNameError.textContent = '';
  emailError.textContent = '';
  passwordError.textContent = '';
  confirmPasswordError.textContent = '';
  termsError.textContent = '';

  let valid = true;

  if (!firstName) {
      firstNameError.textContent = 'First name is required.';
      valid = false;
  }

  if (!lastName) {
      lastNameError.textContent = 'Last name is required.';
      valid = false;
  }

  if (!emailRegex.test(email)) {
      emailError.textContent = 'Please enter a valid email address.';
      valid = false;
  }

  if (!passwordRegex.test(password)) {
      passwordError.textContent = 'Password must be at least 8 characters long and contain both letters and numbers.';
      valid = false;
  }

  if (password !== confirmPassword) {
      confirmPasswordError.textContent = 'Passwords do not match.';
      valid = false;
  }

  if (!termsChecked) {
      termsError.textContent = 'You must agree to the terms and conditions.';
      valid = false;
  }

  if (valid) {
      alert('Your Account Register Successfully!.');
      document.querySelector('form').submit(); 
  }
}

// CONTACT VALIDATION FORM


function validateContactForm() {
  const firstName = document.querySelector('input[placeholder="Your First Name"]').value;
  const email = document.querySelector('input[placeholder="Your Email"]').value;
  const phone = document.querySelector('input[placeholder="Your Phone"]').value;
  const subject = document.querySelector('input[placeholder="Subject"]').value;
  const message = document.querySelector('textarea[placeholder="Your Message"]').value;

  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const phoneRegex = /^[0-10]{11}$/; 

  const firstNameError = document.getElementById('firstNameError');
  const emailError = document.getElementById('emailError');
  const phoneError = document.getElementById('phoneError');
  const subjectError = document.getElementById('subjectError');
  const messageError = document.getElementById('messageError');


  firstNameError.textContent = '';
  emailError.textContent = '';
  phoneError.textContent = '';
  subjectError.textContent = '';
  messageError.textContent = '';

  let valid = true;

  if (!firstName) {
      firstNameError.textContent = 'First name is required.';
      valid = false;
  }


  if (!emailRegex.test(email)) {
      emailError.textContent = 'Please enter a valid email address.';
      valid = false;
  }

  if (!phoneRegex.test(phone)) {
      phoneError.textContent = 'Please enter a valid phone number (11 digits).';
      valid = false;
  }

  if (!subject) {
      subjectError.textContent = 'Subject is required.';
      valid = false;
  }

  if (!message) {
      messageError.textContent = 'Message cannot be empty.';
      valid = false;
  }

  if (valid) {
      alert('Form is valid! You can proceed with submission.');
  }
}

// APPOINTMENT VALIDATION FORM


function validateAppointmentForm() {
  const firstName = document.getElementById('firstName').value;
  const email = document.getElementById('email').value;
  const appointmentSelect = document.getElementById('appointmentSelect').value;
  const appointmentDate = document.getElementById('appointmentDate').value;
  const comments = document.getElementById('areaText').value;

  const firstNameError = document.getElementById('firstNameError');
  const emailError = document.getElementById('emailError');
  const selectError = document.getElementById('selectError');
  const dateError = document.getElementById('dateError');
  const textError = document.getElementById('textError');

  firstNameError.textContent = '';
  emailError.textContent = '';
  selectError.textContent = '';
  dateError.textContent = '';
  textError.textContent = '';

  let valid = true;

  if (!firstName) {
      firstNameError.textContent = 'First name is required.';
      valid = false;
  }

  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!email || !emailRegex.test(email)) {
      emailError.textContent = 'Please enter a valid email address.';
      valid = false;
  }

  if (appointmentSelect === 'Open this select menu') {
      selectError.textContent = 'Please select an option.';
      valid = false;
  }

  if (!appointmentDate) {
      dateError.textContent = 'Please select a date.';
      valid = false;
  }

  if (!comments) {
      textError.textContent = 'Please write your comments.';
      valid = false;
  }

  if (valid) {
      alert('Appointment form is valid! You can proceed with submission.');
  }
}


