<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="test.css">
    <style>
        .page-container {
            height: 120vh;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: 
    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), /* Darken with black gradient */
    url('assets/potchitosrepeat.png');


            background-size: cover;
            background-position: center;
        }
        .form-box {
            width: 35%;
            padding: 40px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            height: auto;
        }
        .form-box h1 {
            margin-bottom: 20px;
        }
        .form-box button {
            width: 100%;
            padding: 10px;
        }
        .form-box p {
            margin-top: 15px;
            text-align: center;
        }
    

        /* Make it responsive */
        @media (max-width: 768px) {
            .form-box {
                width: 90%;
            }
            .image-box {
                display: none; /* Hide image box on smaller screens */
            }
            .page-container {
                flex-direction: column;
            }
        }
        /* Style for error message */
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="page-container">
        <div class="form-box">
            <h1 class="text-center">Sign Up</h1>
            <form id="signupForm" action="signup.php" method="post">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required onkeyup="checkPassword()">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required onkeyup="checkPassword()">
                    <span id="passwordError" class="error-message"></span>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="contact" name="contact" required>
                </div>
                <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Sign Up</button>
            </form>
            <p>Already have an account? <span><a href="login.php">Log In Instead</a></span></p>
        </div>

    </div>

    <?php include 'footer.php'; ?>

    <script>
        function checkPassword() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const passwordError = document.getElementById('passwordError');
            const submitBtn = document.getElementById('submitBtn');

            if (password !== confirmPassword) {
                passwordError.textContent = 'Passwords do not match';
                submitBtn.disabled = true;
            } else {
                passwordError.textContent = '';
                submitBtn.disabled = false;
            }
        }
    </script>

</body>
</html>
