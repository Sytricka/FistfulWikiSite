<?php
session_start();

// Check if there's a registration error message
if (isset($_SESSION['registration_error'])) {
    $registration_error = $_SESSION['registration_error'];
    // Clear the error message from the session
    unset($_SESSION['registration_error']);
}

elseif (isset($_SESSION['success_reg'])) {
    $success_message = $_SESSION['success_reg'];
    // Clear the error message from the session
    unset($_SESSION['success_reg']);
}

elseif (isset($_SESSION['login_error'])) {
    $login_error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="The unofficial wiki of Fistful of Frags - multiplayer first-person shooter game set in the American Wild West during the late 19th century">
    <meta name="keywords" content="Fistful of Frags, FPS, game, steam, first person, shooter, cow-boy, western, revolvers, blackpowder, american wild west, late 19th century">
    <meta name="author" content="Karolis Stasiulionis">
    <meta name="viewport" content="width=device-wifth, initial-scale=1.0">

    <title>My Account | Fistful Of Frags Wiki</title>
    <link rel="icon" type="image/x-icon" href="media/logo1.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="account.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav id="navbar" class="navbar sticky-top navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand col-lg-2 col-md-4">
                <img src="media/logo1.png" alt="Logo" class="logo">
                <a href="index.html" class="title">Fistful Of Frags</a>
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ms"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="col d-flex justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown pe-2 ps-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Guns
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="weapons.php">Weapons</a></li>
                        <li><a class="dropdown-item" href="pistols.php">Pistols</a></li>
                        <li><a class="dropdown-item" href="#">Rifles</a></li>
                        <li><a class="dropdown-item" href="#">Shotguns</a></li>
                        <li><a class="dropdown-item" href="#">Meele</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link" href="maps.php">Maps</a>
                    </li>
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link" href="#">Game Modes</a>
                    </li>
                    <li class="nav-tem pe-2 ps-2">
                        
                    </li>
                </ul>
            </div>
          </div>

        <button onclick="toggleDarkMode()" class="btn btn-outline-light ps-2 pe-2">
            <i id="darkModeIcon" class="fas fa-sun fa-lg"></i>
        </button>

        <div class="col col-lg-2 col-md-4 ms-2">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light ps-2 pe-2" type="submit">
                    <i class="fas fa-search fa-lg"></i> 
                </button>
            </form>
        </div>

        <a href="#" class="active" aria-current="page">
            <button class="btn btn-outline-light ms-2 ps-2 pe-2">
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
            </button>
        </a>

        
        
</nav>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<main class="main_page" lang="en">
    <br>

    <?php if (isset($registration_error)) : ?>
        <div class="alert alert-danger text-center"><?php echo $registration_error; ?></div>
    <?php endif; ?>

    <?php if (isset($success_message)) : ?>
        <div class="alert alert-success text-center"><?php echo $success_message; ?></div>
    <?php endif; ?>

    <?php if (isset($login_error)) : ?>
        <div class="alert alert-danger text-center"><?php echo $login_error; ?></div>
    <?php endif; ?>

    <div class="login-cont container mt-5" id="signInForm">
        <div class="hello-msg text-center">
            <h1>Welcome Back!</h1>
            <h2 class="sign-in-text mb-4">Feel free to sign in</h2>
            Don't have an account yet?
            <a href="#" id="signUpLink">Sign up!</a></span>
        </div>

        <form action="signin.php" method="post">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your email" name="email" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            
                <button class="btn-new" type="submit" name="signin">Login</button>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
            </div>
        </form>
    </div>

    <div class="login-cont container mt-5" id="signUpForm"  style="display:none">
        <div class="hello-msg text-center">
            <h1>Sign up</h1>
            Already have an account?
            <a href="#" id="signInLink">Sign in</a></span>
        </div>

        <form action="register.php" method="post">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your email" name="email" required>

                <label for="dname"><b>Display name</b></label>
                <input type="text" placeholder="Enter Nickname" name="dname" required>

                <label for="psw"><b>Password</b></label> 
                <input type="password" placeholder="Enter Password" id="password" name="psw" required>

                <label for="psw"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" id="confirm_password" name="psw" required>
                
                <button class="btn-new" type="submit" name="register">Register account</button>
            </div>
        </form>
    </div>

    
    
    <br><br>

</main>

<br>
<br>

<footer class="foot1 container-fluid">
    <div class="row text-center pt-3">
        <p>The unofficial Fistful Of Frags wiki</p>
        <p>Karolis Stasiulionis</p>
    </div>
</footer>

    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/6ec9c7cfba.js" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
