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
    <title>Sign Up</title>
</head>

<body>




<?php
// Initialize an empty array to store user data
$users = array();

// Check if the users.txt file exists, and if so, load existing users into the array
$user_file = "users.txt";
if (file_exists($user_file)) {
    $user_data = file($user_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_merge($users, $user_data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the submitted form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the email already exists in the array
    
        // Add the new user to the array
        $users[] = "$email:$password";

        // Store user information in the users.txt file
        file_put_contents($user_file, implode("\n", $users) . "\n", LOCK_EX);
        // Display a success message
        echo "<script>alert('Registered Successfully');</script>";
    
}
?>

<!-- Your HTML code for the sign-up form goes here -->

    <div class="nav">
        <h1><a href="../index.html" style="text-decoration: none;">TradeX</a></h1>
    </div>
    <div class="container">

        <div class="container3 ">
            <form method="POST" action="" onsubmit=" return validation()" id="myform"
                class="form d-flex flex-column justify-content-center align-items-start  rounded px-5 py-4 glowing-border">
                <h1 class="mb-4">Sign Up</h1>
                <div class="mb-4">
                    <label for="user" class="form-label">Username: </label>
                    <input name="name" type="text" class="form-control" id="name" size="30">
                    <span class="text-warning " id="username"></span>
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        size="30">
                    <span class="text-warning" id="emailid"></span>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label w-125">Password</label>
                    <input type="password" class="form-control" id="pass" name="password" size="30">
                    <span class="text-warning " id="password"></span>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="conpass" size="30">
                    <span class="text-warning " id="confirmpassword"></span>
                </div>
                <div class="mb-4">
                    <label for="exampleInputMobile" class="form-label">Mobile Number:</label>
                    <input type="tel" class="form-control" id="mobile" size="30">
                    <span class="text-warning " id="mobileNumber"></span>
                </div>


                <input type="submit" name="submit" value="Submit" class="btn btn-light" autocomplete="off"
                    onclick="return validation()">
            </form>

            <div class="text">
                <p class="my-2">Already have an account? <a href="./login.php">Login</a></p>
            </div>

        </div>
        <img src="../assets/homepage.png" alt="image">
    </div>

    <script src="./validation.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>

</body>

</html>
