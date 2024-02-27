<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>

    <title>Login </title>
</head>

<body>

<!-- By default input array is created to login -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process login form
    $username = $_POST["email"];
    $password = $_POST["password"];

    // Read user information from the file (for simplicity)
    $user_data = file("users.txt", FILE_IGNORE_NEW_LINES);

    // Check if the username and password match
    $credentials_matched = false;

    foreach ($user_data as $line) {
        list($stored_username, $stored_password) = explode(':', $line);

        if ($username === $stored_username && $password === $stored_password) {
            $credentials_matched = true;
            break;
        }
    }

    if ($credentials_matched) {
        echo "<h2 style='text-align:center ; color:green' >Login Successful, Welcome $username! </h2> <a href='../index.html' style='text-align:center ; color:white ; text-decoration:none'>Go to Home</a>";
    } else {
        echo "<h4 style='text-align:center ; color:red' >Invalid username or password. <a href='login.php'>Try again</a> </h4>";
    }
}
?>


<!-- Your HTML code for the login form goes here -->

    
    <div class="container">

        <div class="container3 ">
            <form  method="POST" action="login.php" onsubmit=" return validation2()" id="myform" 
                class="form d-flex flex-column justify-content-center align-items-start  rounded px-5 py-4 glowing-border">
                <h1 class="mb-4">Login</h1>

                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        size="30">
                    <span class="text-warning" id="emailid"></span>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label w-125">Password</label>
                    <input type="password" class="form-control" name="password" id="pass" size="30">
                    <span class="text-warning " id="password"></span>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-light" autocomplete="off"
                    onclick="return validation2()">

            </form>
            <div class="text">
                <p class="my-2">Don't have an account? <a href="./signUp.php">Sign Up</a></p>
            </div>
        </div>

        <img src="../assets/homepage.png" alt="image">
    </div>

    <script src="./validation2.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    </script>

</body>

</html>