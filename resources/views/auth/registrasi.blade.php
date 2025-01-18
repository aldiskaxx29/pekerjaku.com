<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
      /* styles.css */
      body {
          margin: 0;
          font-family: 'Roboto', sans-serif;
          background: linear-gradient(135deg, #6e8efb, #a777e3);
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          color: #333;
      }

      .container {
          width: 100%;
          max-width: 400px;
          background: #fff;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
          text-align: center;
      }

      .form-container {
          position: relative;
          width: 100%;
      }

      .form {
          display: none;
          animation: fade-in 0.3s ease-in-out;
      }

      .form.active {
          display: block;
      }

      h2 {
          margin-bottom: 10px;
          color: #333;
      }

      p {
          font-size: 14px;
          margin-bottom: 20px;
          color: #666;
      }

      .input-group {
          margin-bottom: 15px;
          text-align: left;
      }

      .input-group label {
          display: block;
          font-size: 14px;
          margin-bottom: 5px;
          color: #444;
      }

      .input-group input {
          width: 100%;
          padding: 10px;
          font-size: 14px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-sizing: border-box;
          outline: none;
      }

      .input-group input:focus {
          border-color: #6e8efb;
          box-shadow: 0 0 5px rgba(110, 142, 251, 0.5);
      }

      .actions {
          margin-top: 15px;
      }

      .actions .btn {
          width: 100%;
          background: linear-gradient(135deg, #6e8efb, #a777e3);
          color: #fff;
          padding: 10px;
          font-size: 16px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: all 0.3s ease;
      }

      .actions .btn:hover {
          background: linear-gradient(135deg, #5b77d6, #9367cf);
      }

      .actions .forgot-password {
          display: block;
          margin-top: 10px;
          font-size: 14px;
          color: #6e8efb;
          text-decoration: none;
      }

      .actions .forgot-password:hover {
          text-decoration: underline;
      }

      .switch-form {
          margin-top: 15px;
          font-size: 14px;
      }

      .switch-form a {
          color: #6e8efb;
          text-decoration: none;
          font-weight: bold;
      }

      .switch-form a:hover {
          text-decoration: underline;
      }

      /* Fade-in animation */
      @keyframes fade-in {
          from {
              opacity: 0;
              transform: translateY(-20px);
          }
          to {
              opacity: 1;
              transform: translateY(0);
          }
      }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Login Form -->
            <form id="login-form" class="form active">
                <h2>Login</h2>
                <p>Welcome back! Please login to your account.</p>
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" placeholder="Enter your password" required>
                </div>
                <div class="actions">
                    <button type="submit" class="btn">Login</button>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <p class="switch-form">
                    Don't have an account? <a href="#" id="show-register">Sign Up</a>
                </p>
            </form>
            <!-- Register Form -->
            <form id="register-form" class="form">
                <h2>Register</h2>
                <p>Create your account and join us today!</p>
                <div class="input-group">
                    <label for="register-name">Full Name</label>
                    <input type="text" id="register-name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" placeholder="Create a password" required>
                </div>
                <div class="actions">
                    <button type="submit" class="btn">Register</button>
                </div>
                <p class="switch-form">
                    Already have an account? <a href="#" id="show-login">Login</a>
                </p>
            </form>
        </div>
    </div>

    <script>
      // script.js
      document.addEventListener('DOMContentLoaded', function () {
          const loginForm = document.getElementById('login-form');
          const registerForm = document.getElementById('register-form');
          const showLogin = document.getElementById('show-login');
          const showRegister = document.getElementById('show-register');

          // Switch to register form
          showRegister.addEventListener('click', (e) => {
              e.preventDefault();
              loginForm.classList.remove('active');
              registerForm.classList.add('active');
          });

          // Switch to login form
          showLogin.addEventListener('click', (e) => {
              e.preventDefault();
              registerForm.classList.remove('active');
              loginForm.classList.add('active');
          });
      });

    </script>
</body>
</html>
