<?php
include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Contact Us - Hotel Blue Bird</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        body {
            background-color: #f0f8ff;
            color: #333;
        }
        .navbar {
            background-color: #4a90e2;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .contact-form {
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            color: #4a90e2;
        }
        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
        }
        .btn-primary:hover {
            background-color: #3a7bc8;
            border-color: #3a7bc8;
        }
        footer {
            background-color: #4a90e2;
            color: white;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .social-icons {
            font-size: 1.5rem;
        }
        .social-icons a {
            color: white;
            margin: 0 10px;
        }
        @media (max-width: 768px) {
            .contact-form {
                margin: 1rem;
            }
            footer {
                position: static;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./image/bluebirdlogo.png" alt="Bluebird Logo" height="30" class="d-inline-block align-top">
                BLUEBIRD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="home.php#secondsection">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="home.php#thirdsection">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-danger" href="./logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center mt-5 mb-4">Contact Us</h2>
        <div class="contact-form">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="mt-2">
                <p class="mb-0">Created by @pasindu</p>
            </div>
        </div>
    </footer>
</body>
</html>
