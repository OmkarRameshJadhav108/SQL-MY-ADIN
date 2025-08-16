// Email validation regex
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Login Form Validation
loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();

    if(username.length < 3) {
        alert('Username must be at least 3 characters.');
    } else if (!emailRegex.test(email)) {
        alert('Please enter a valid email (e.g., user@example.com).');
    } else {
        isLoggedIn = true;
        alert('Login Successful! Now you can order.');
    }
});
