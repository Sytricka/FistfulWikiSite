<?php
session_start();
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

    <title>Colt Walker | Fistful Of Frags Wiki</title>
    <link rel="icon" type="image/x-icon" href="media/logo1.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="InfoStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

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

        <a href="myAccount.php">
            <button class="btn btn-outline-light ms-2 ps-2 pe-2">
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
            </button>
        </a>  
</nav>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<main class="main_page container mt-5 mb-5" lang="en">
<input type="hidden" id="pageId" value="4">
  <div class="row">
    <div class="main col-lg-9 col-md-9 border">
        <div class="row align-items-center mt-3 mb-4">
            <div class="col">
                <h1>Colt Walker</h1>  
            </div>
            <div class="col d-flex justify-content-end">

                <div class="counter">0</div>
                <div id="rateYo-read"></div>
                <div class="rating-num">0</div>
            </div>
        </div>
    

        <table class="info-table">
            <tbody>
                <tr>
                    <th class="table-head" colspan="2">Colt Walker</th>
                </tr>

                <tr style="margin:auto">
                    <td colspan="2" style="padding: 0.5rem;">
                        <img loading="lazy" src="media/images/ColtWalker.jpg" class="img-thumbnail" title="Colt Walker" alt="Picture of a Colt Walker" data-bs-toggle="modal" data-bs-target="#coltwalkerModal">

                        <div class="modal fade" id="coltwalkerModal" tabindex="-1" aria-labelledby="coltwalkerModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                                            <img loading="lazy" src="media/images/ColtWalker.jpg" class="modalImg img-fluid">
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="table-head" colspan="2" style="font-size:100%;">Stats</th>
                </tr>

                <tr>
                    <td style="width: 50%;">
                        <b>Type:</b>
                    </td>
                    <td style="width: 50%;">
                        Revolver
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Shootout tier:</b>
                    </td>
                    <td>
                        Three
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Base notoriety reward:</b>
                    </td>
                    <td>
                        Four
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Dual-wield:</b>
                    </td>
                    <td>
                        Yes
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Default cost:</b>
                    </td>
                    <td>
                        125$
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Maximum accuracy:</b>
                    </td>
                    <td>
                        75%
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Fire rate:</b>
                    </td>
                    <td>
                        Very slow
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Fannable:</b>
                    </td>
                    <td>
                        No
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Reload style:</b>
                    </td>
                    <td>
                        Single
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Quickswitchable:</b>
                    </td>
                    <td>
                        Yes
                    </td>
                </tr>
            </tbody>
        </table>

        <hr class="map-hr"/>
        <h3><strong>Overview</strong></h3>
        <hr class="map-hr"/>

        <p>The Colt Walker is a very high damage revolver, usually capable of dealing one shot kills with some change. Still, 
            when hitting the limbs and/or hitting targets at long range, the Walker may need more ammunition to kill the enemy. 
            Due to how powerful the Colt Walker is up close and how long it takes to reload, users should try to stick to medium range 
            engagements where the Walker's one hit kill potential is at its finest. </p>

        <p>On the subject of accuracy, the Colt Walker's accuracy is average at 75%. While not bad, 
            this accuracy does not stand out as a definitive weakness nor strength. </p>

        <p>The Colt Walker was previously the only revolver incapable of fanning. The SW Hammerless was eventually introduced, which also cannot be fanned. 
            Currently, these two guns are the only revolvers in the game that cannot be fanned. Thus, unlike other revolvers, the Walker is limited to regular 
            fire, and it is the second slowest firing weapon in the game that isn't single shot, only faster than the Spencer Rifle. </p>

        <p>The Walker has an extremely long reload, taking about three seconds to reload a single bullet. Due to these two large weaknesses, 
            the Colt Walker is among the most punishing weapons in the game to inaccurate players.</p>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Dual Wielding</strong></h3>
        <hr class="map-hr"/>
        <p>Unlike all other gold chest weapons, the Colt Walker is one handed. Should the player get access to a Colt Peacemaker, Mare's Leg, or even 
            another Colt Walker, the player becomes an extreme threat in mid-close range, with two weapons capable of killing in one shot. Should the player 
            have a weaker weapon such as a Colt Navy 1851 or Volcanic Pistol paired with the Colt Walker, users should refrain from using the weaker weapon until 
            a foe is badly wounded or when the Colt Walker needs to be reloaded. Pairing up the Colt Walker with another weapon is usually a better idea than not 
            since, unlike other revolvers, the Colt Walker does not sacrifice a fanning ability. </p>

    </div>

    <div class="side col col-lg-3 col-md-3 border">
        <div class="sticky-top">
            <div class="sticky-wrapper container text-center pt-4">
                <br><br>
                <h2>Popular Pages</h2>
                <hr class="map-hr"/>
            </div>

            <ul class="popularList">
                <li>
                    <a class="popularList-item" href="maps.php" title="Maps">
                        <img class="popular_p_img" src="media/Scroll.png" alt="Scroll" loading="lazy">
                        Maps
                    </a>
                </li>
                <li>
                    <a class="popularList-item" href="coltwalker.php" title="Colt Walker">
                        <img class="popular_p_img" src="media/images/ColtWalker.jpg" alt="Colt Walker handgun being held" loading="lazy">
                        Colt Walker
                    </a>
                </li>
                <li>
                    <a class="popularList-item" href="weapons.php" title="Weapons">
                        <img class="popular_p_img" src="media/Peacemaker.png" alt="Peacemaker handgun" loading="lazy">
                        Weapons
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</main>
<br>

<div class="submitSuc container">
    Thank you for submitting your rating!
    </div>
        <div class="rating-cont container">
            Rate this page:
            <div id="rateYo-set"></div>
        <div>
        <div <?php echo isset($_SESSION['user_id']) ? '' : 'data-bs-toggle="tooltip" data-bs-placement="top" title="You need to be logged in to rate"'; ?>>
            <button id="getRating" type="button" class="submit-btn btn btn-primary mt-2" <?php echo isset($_SESSION['user_id']) ? '' : 'disabled'; ?>>
                Submit rating
            </button>
        </div>
    </div>
</div>
<br>

<div class="commentsection">
    <div class="comment-container container mt-5">
        <h3><bold id="commentCount"> Comments</bold></h3>
    
        <div class="comment-cont container mt-3">
            <div class="comment-header">
                <span class="comment-username pe-2">krump</span>
                <span class="comment-date">8/4/2023</span>
            </div>
            <div class="comment-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            </div>
            <div class="comment-actions">
                <button class="btn btn-sm btn-primary reply-button mt-2" <?php echo isset($_SESSION['user_id']) ? '' : 'style="display:none;"';; ?>>
                    Reply
                </button>
            </div>
        </div>
    
        <form class="comment-form" id="commentForm" style="display: none;">
            <div class="mt-2">
                <label for="commentText" class="form-label">Your Comment</label>
                <textarea class="form-control" id="commentText" rows="3" required></textarea>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                    <button id="turnOffButton" class="btn btn-primary ms-2" type="button">
                        <i class="fa fa-times fa-lg"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="container" <?php echo isset($_SESSION['user_id']) ? '' : 'data-bs-toggle="tooltip" data-bs-placement="top" title="You need to be logged in to comment"'; ?>>
        <button class="btn btn-primary write-comment-button mt-2" <?php echo isset($_SESSION['user_id']) ? '' : 'disabled'; ?>>
            Write a new comment
        </button>
    </div>
</div>



<br><br>

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