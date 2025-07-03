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

    <title>Weapons | Fistful Of Frags Wiki</title>
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
                            <li><a class="dropdown-item active" aria-current="page" href="#">Weapons</a></li>
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
<input type="hidden" id="pageId" value="1">
  <div class="row">
    <div class="main col-lg-9 col-md-9 border">
        <div class="row align-items-center mt-3 mb-4">
            <div class="col">
                <h1>Weapons</h1>  
            </div>
            <div class="col d-flex justify-content-end">

                <div class="counter">0</div>
                <div id="rateYo-read"></div>
                <div class="rating-num">0</div>
            </div>
        </div>
      
      <hr class="map-hr"/>
      <img loading="lazy" src="media/Peacemaker.png" class="img-thumbnail-float" title="Peacemaker" alt="Picture of a Peacemaker handgun" data-bs-toggle="modal" data-bs-target="#peacemakerModal">

      <div class="modal fade" id="peacemakerModal" tabindex="-1" aria-labelledby="peacemakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                        <img loading="lazy" src="media/Peacemaker.png" class="modalImg img-fluid">
                    </div>
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
      </div>

      <p><i><strong>Fistful of Frags</strong></i> has a plethora of weapons to use. Weapons are obtained in different ways depending on the game mode. 
        In Teamplay you buy them from your spawn. In Break Bad you can buy them within a short amount of time after you spawn - 
        after that you need to get them from buy zones - and in Shootout, Team Shootout and Elimination you can choose from a set of starter weapons 
        by spending stars to create a weapon loadout to spawn with. You can also find stronger weapons around the map in color-coded chests in Shootout, 
        Team Shootout and Elimination. </p>
      <p>Weapons in <i><strong>Fistful Of Frags</strong></i> are organized into a tier system - each tier has generally more powerful weapons than the last. 
        More powerful weapons from higher tiers will usually give a lower notoriety (score) reward for each frag than less powerful weapons 
        from lower tiers.</p>

        <br>

        <hr class="map-hr"/>
            <h3><strong>Types</strong></h3>
        <hr class="map-hr"/>
        <p>There are five types of weapons in <i><strong>Fistful of Frags:</i></strong></p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="pistols.php">Pistols</a>: One handed weapons that fire one shot at a time and can usually be fanned. 
                Damage drops with distance to target. (SW Hammerless, Volcanic Pistol, Derringer, Colt Navy, SW Schofield, Colt Peacemaker, Colt Walker, 
                Remington Army)</li>
            <li class="list_item"> <a class="headline_link" href="#">Rifles</a>: Weapons with less damage drop off than other types. They have the ability to 
                aim down the sights, with the exception of the Mare's Leg, which can be fanned instead. (Mare's Leg, Smith Carbine, Yellowboy Rifle, Spencer Rifle, 
                Sharps Rifle)</li>
            <li class="list_item"> <a class="headline_link" href="#">Shotguns</a>: Weapons that fire a group of buckshot pellets instead of bullets. 
                Deadly at close range when aimed at the center mass of the target. Damage drops off rapidly with distance to target.  (Sawed-Off Shotgun, 
                Coach Gun, Pump Shotgun)</li>
            <li class="list_item"> <a class="headline_link" href="#">Melee</a>: Weapons designed for close range combat. Knives, Hatchets, and Machetes can be 
                thrown, and are affected by gravity. (Fists, Kicks, Brass Knuckles, Boots, Knives, Hatchet, Machete)</li>
            <li class="list_item"> <a class="headline_link" href="#">Special</a>: Weapons that do not fit into any of the other categories. (Bow, Dynamite, 
                Black Dynamite, Dynamite Belt, Portable Whiskey Jug)</li>
        </ul>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Starter Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Starter Weapons are weapons that you can spawn with in Shootout with the weapon selection screen. 
            The player has 11 stars to spend when creating a loadout. If the player tries to choose a piece of equipment that, 
            if chosen, would make the loadout's total cost exceed 11 stars in overall cost, the player will not be able to choose that 
            equipment piece without first removing enough equipment pieces to make room for it. 
        </p>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Primary Starter Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Primary Starter weapons are meant to be used as primary weapons until stronger weapons can be obtained or become available. 
            They have enough strength to successfully kill a player and they can (with enough skill) be used as standalone weapons over longer periods 
            but they tend to fall short of most other obtainable weapons.</p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="#">Volcanic Pistol</a> (Cost: 3 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Colt Navy</a> (Cost: 4 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Sawed-Off Shotgun</a> (Cost: 4 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Bow</a> (Cost: 4 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">SW Hammerless x2</a> (Cost: 5 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Remington Army</a> (Cost: 5 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Mare's Leg</a> (Cost: 6 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Smith Carbine</a> (Cost: 7 Stars)</li>
        </ul>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Secondary Starter Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Secondary Starters are "perks" or sidearms you can pick to spawn with in Shootout using the weapon selection screen. 
            Unlike with the Primary Starters which you can only pick one of, you may choose as many Secondary Starters as you want, 
            as long as you have enough stars available. Secondary Starters are usually not capable of being used as standalone primary weapons in their 
            own right and should instead be used to supplement the Primary Starters. </p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="pistols.php#pistol-throw">Handgun Throw</a> (Cost: 1 Star)</li>
            <li class="list_item"> <a class="headline_link" href="#">Tracking</a> (Cost: 2 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Heavy Loads</a> (Cost: 2 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Quick Draw</a> (Cost: 3 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Brass Knuckles</a> (Cost: 3 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Knife x3</a> (Cost: 3 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Boots</a> (Cost: 4 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Derringer</a> (Cost: 5 Stars)</li>
            <li class="list_item"> <a class="headline_link" href="#">Dynamite</a> (Cost: 6 Stars)</li>
        </ul>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Blue Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Blue weapons (aka low tier) refers to any weapon found in Blue Chests.</p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="#">Hatchet</a></li>
            <li class="list_item"> <a class="headline_link" href="#">SW Schofield</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Yellowboy 1866</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Portable Whiskey</a></li>
        </ul>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Red Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Red weapons (aka mid tier) refers to any weapon found in Red Chests. </p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="#">Coachgun</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Colt Peacemaker</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Black Dynamite</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Spencer Carbine</a></li>
        </ul>
        <br>

        <hr class="map-hr"/>
        <h3><strong>Gold Weapons</strong></h3>
        <hr class="map-hr"/>
        <p>Gold weapons (aka high tier) refers to any weapon found in Gold Chests. While commonly referred to as "gold weapons" 
            they should not be confused with the gold weapon skins rewarded to winners of the Fistful of Frags Competitive League. </p>

        <ul class="list1">
            <li class="list_item"> <a class="headline_link" href="#">Pump Shotgun W1893</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Colt Walker</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Sharps Rifle</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Dynamite Belt</a></li>
            <li class="list_item"> <a class="headline_link" href="#">Machete</a></li>
        </ul>

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