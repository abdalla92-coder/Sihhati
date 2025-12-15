<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sihhati</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #0d7e8a;
            --primary-dark: #0a636d;
            --secondary-color: #4CAF50;
            --accent-color: #FF9800;
            --light-color: #f5f9fa;
            --dark-color: #333;
            --gray-color: #666;
            --light-gray: #eee;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f8f9fa;
            color: var(--dark-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            color: var(--primary-color);
            font-size: 28px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo-arabic {
            font-size: 24px;
            color: var(--primary-dark);
        }

        .back-home {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .back-home:hover {
            color: var(--primary-dark);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .registration-container {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            overflow: hidden;
            display: flex;
            min-height: 600px;
        }

        .registration-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .registration-right {
            flex: 1.2;
            padding: 50px;
        }

        .registration-left h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .registration-left p {
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .benefits-list {
            list-style: none;
            margin-top: 30px;
        }

        .benefits-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .benefits-list i {
            color: var(--accent-color);
            font-size: 18px;
        }

        .registration-right h2 {
            color: var(--primary-dark);
            font-size: 28px;
            margin-bottom: 10px;
        }

        .registration-subtitle {
            color: var(--gray-color);
            margin-bottom: 30px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(13, 126, 138, 0.1);
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-color);
        }

        .input-with-icon .form-control {
            padding-right: 45px;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-color);
            cursor: pointer;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-top: 3px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: var(--gray-color);
        }

        .checkbox-group a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 16px;
            width: 100%;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-google {
            background-color: white;
            color: var(--dark-color);
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-google:hover {
            background-color: #f5f5f5;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: var(--gray-color);
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .form-divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: var(--gray-color);
        }

        .form-divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background-color: #eee;
        }

        .form-divider span {
            background: white;
            padding: 0 15px;
            position: relative;
        }

        /* Footer */
        footer {
            background-color: #1a2a3a;
            color: white;
            padding: 30px 0 20px;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #2a3a4a;
            color: #bbb;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .registration-container {
                flex-direction: column;
            }

            .registration-left, .registration-right {
                padding: 30px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .main-content {
                padding: 20px 0;
            }
        }

        @media (max-width: 576px) {
            .registration-left h2 {
                font-size: 24px;
            }

            .registration-right h2 {
                font-size: 22px;
            }

            .registration-left, .registration-right {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                    <div class="logo-text">Sihhati</div>
                    <div class="logo-arabic">صحتي</div>
                </div>
            </a>

            <a href="{{ url('/') }}" class="back-home">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="registration-container">
                <!-- Left Side - Benefits -->
                <div class="registration-left">
                    <h2>Join Sihhati Today</h2>
                    <p>Create your free account and start managing your health with our comprehensive platform.</p>

                    <ul class="benefits-list">
                        <li><i class="fas fa-check-circle"></i> Book appointments with top doctors</li>
                        <li><i class="fas fa-check-circle"></i> Access your health records anytime</li>
                        <li><i class="fas fa-check-circle"></i> Online consultations from home</li>
                        <li><i class="fas fa-check-circle"></i> Medication reminders and tracking</li>
                        <li><i class="fas fa-check-circle"></i> Secure and private health data</li>
                        <li><i class="fas fa-check-circle"></i> Family health management</li>
                    </ul>
                </div>

                <!-- Right Side - Registration Form -->
                <div class="registration-right">
                    <h2>Create Account</h2>
                    <p class="registration-subtitle">Fill in your details to create your Sihhati account</p>

                    <form id="registrationForm" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" id="firstName" name="first_name" class="form-control" placeholder="Enter your first name" required>
                            </div>

                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Enter your last name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-with-icon">
                                <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" required>
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <div class="input-with-icon">
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+962 7X XXX XXXX" required>
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-with-icon">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Create a password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <small style="color: var(--gray-color); font-size: 13px;">Must be at least 8 characters with letters and numbers</small>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-with-icon">
                                <input type="password" id="confirmPassword" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthDate" class="form-label">Date of Birth</label>
                            <input type="date" id="birthDate" name="birth_date" class="form-control" required>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">
                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">
                                I want to receive health tips and updates from Sihhati
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Account</button>

                        <div class="form-divider">
                            <span>Or register with</span>
                        </div>

                        <button type="button" class="btn btn-google">
                            <i class="fab fa-google"></i> Continue with Google
                        </button>

                        <p class="login-link">
                            Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div>
                        <div class="logo-text" style="color: white;">Sihhati</div>
                        <div class="logo-arabic" style="color: #bbb;">صحتي</div>
                    </div>
                </div>

                <div>
                    <a href="#" style="color: white; margin-left: 15px;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: white; margin-left: 15px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: white; margin-left: 15px;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: white; margin-left: 15px;"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="copyright">
                <p>All rights reserved &copy; 2023 "Sihhati" Platform - Sihhati Health Platform</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle password visibility
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const toggleButton = field.parentNode.querySelector('.password-toggle i');

            if (field.type === 'password') {
                field.type = 'text';
                toggleButton.classList.remove('fa-eye');
                toggleButton.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                toggleButton.classList.remove('fa-eye-slash');
                toggleButton.classList.add('fa-eye');
            }
        }

        // Form validation
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;

            // Check if passwords match
            if (password !== confirmPassword) {
                alert('Passwords do not match! Please check and try again.');
                return;
            }

            // Check password strength
            if (password.length < 8) {
                alert('Password must be at least 8 characters long.');
                return;
            }

            if (!/(?=.*[a-zA-Z])(?=.*\d)/.test(password)) {
                alert('Password must contain both letters and numbers.');
                return;
            }

            // Check if terms are accepted
            if (!terms) {
                alert('You must agree to the Terms of Service and Privacy Policy.');
                return;
            }

            // If all validations pass
            alert('Account created successfully! Welcome to Sihhati.');

            // In a real application, you would submit the form
            // this.submit();

            // For demo purposes, redirect to home page
            setTimeout(() => {
                window.location.href = '/';
            }, 1500);
        });

        // Google signup button
        document.querySelector('.btn-google').addEventListener('click', function() {
            alert('Google registration would be implemented here. For demo, please use the form.');
        });

        // Set max date for birth date (18 years ago)
        const today = new Date();
        const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
        document.getElementById('birthDate').max = maxDate.toISOString().split('T')[0];

        // Set min date (120 years ago)
        const minDate = new Date(today.getFullYear() - 120, today.getMonth(), today.getDate());
        document.getElementById('birthDate').min = minDate.toISOString().split('T')[0];
    </script>
</body>
</html>
