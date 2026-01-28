function validasi() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    let error = document.getElementById("errorMsg");
  
    if (user.trim() === "" || pass.trim() === "") {
      error.style.display = "block";
      error.innerText = "Username & Password wajib diisi!";
      return false;
    }
    return true;
}

const togglePassword = document.querySelector('#togglePassword');
const passwordInput = document.querySelector('#password');

togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});