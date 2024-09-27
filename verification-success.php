<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Success</title>

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
            background-position: center;        }

        .verification-card {
            width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .verification-card h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .success-icon {
            font-size: 3rem;
            margin-bottom: 20px;
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
        <div class="success-icon">✅</div>
        <h1>Verification Successful</h1>
        <p>Your account has been successfully verified.</p>
    </div>
</div>

</body>
</html>
