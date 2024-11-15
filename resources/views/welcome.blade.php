<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #212529; /* Dark gray background */
            color: white;
        }
        .main-content {
            min-height: calc(100vh - 100px); /* Adjust based on your header and footer height */
        }
        footer {
            margin-top: auto;
        }
        .navbar, footer {
            background-color: #1a202c; /* Darker gray */
        }
        .navbar-nav > .nav-item > .nav-link {
            color: white;
        }
        .navbar-nav > .nav-item > .nav-link:hover {
            color: #adb5bd; /* Light gray */
        }
    </style>
</head>
<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Our Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="main-content">
        <header class="bg-primary text-white text-center py-5">
            <h1>Welcome to Our Site</h1>
            <p>Your journey begins here</p>
        </header>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h2>About Us</h2>
                    <p>Learn more about what we do and our mission.</p>
                </div>
                <div class="col-md-4">
                    <h2>Services</h2>
                    <p>Explore the wide range of services we offer.</p>
                </div>
                <div class="col-md-4">
                    <h2>Contact</h2>
                    <p>Get in touch with us for more information.</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="text-center py-3">
        <p>&copy; 2023 Our Company. All rights reserved.</p>
    </footer>
</body>
</html>

