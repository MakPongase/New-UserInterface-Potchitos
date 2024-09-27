<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        .verification-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: 
            linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), /* Darken with black gradient */
            url('assets/potchitosrepeat.png');
            background-size: cover;
            background-position: center;
        }

        .verification-card {
            width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .verification-card h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .verification-card input {
            letter-spacing: 5px;
            text-align: center;
            font-size: 1.25rem;
        }

        .verification-card button {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="verification-container">
    <div class="verification-card">
        <h1>Verification Code</h1>
        <p class="text-center">Enter the code sent to your email</p>
        <form action="verify.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" id="verificationCode" name="verificationCode" maxlength="6" required>
            </div>
            <button type="submit" class="btn btn-primary">Verify</button>
        </form>
        <p class="text-center mt-3">Didn't receive the code? <a href="#">Resend</a></p>
    </div>
</div>

</body>
</html>
