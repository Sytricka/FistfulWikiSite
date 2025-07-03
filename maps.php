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

    <title>Maps | Fistful Of Frags Wiki</title>
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
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
                        <a class="nav-link active" aria-current="page" href="#">Maps</a>
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
<input type="hidden" id="pageId" value="2">
  <div class="row">
    <div class="main col-lg-9 col-md-9 border">
        <div class="row align-items-center mt-3 mb-4">
            <div class="col">
                <h1>Maps</h1>  
            </div>
            <div class="col d-flex justify-content-end">

                <div class="counter"></div>
                <div id="rateYo-read"></div>
                <div class="rating-num"></div>

            </div>
        </div>
      
      <hr class="map-hr"/>
      <p>Below is the list of maps available in <i><strong>Fistful of Frags</i></strong>. This includes the maps which were later added into <i><strong>Fistful of Frags</i></strong> through updates, 
        such as Nest, Overtop and Impact. You can find out more information on maps through their specific pages. </p>

        <div class="container list_cont">
          <div class="row">
            <div class="col-lg-5">
              <h5>Classic</h5>
              <hr class="map-hr"/>
              <ul class="list1">
                <li class="list_item">Cripplecreek</li>
                <li class="list_item">Depot</li>
                <li class="list_item">Desperados</li>
                <li class="list_item">Fistful</li>
                <li class="list_item">Impact</li>
                <li class="list_item">Nest + Nest (mini)</li>
                <li class="list_item">Overtop</li>
                <li class="list_item">Revenge</li>
                <li class="list_item">Robert Lee + Robert Lee (mini)</li>
                <li class="list_item">Sawmill</li>
                <li class="list_item">Sweetwater + Sweetwater (mini)</li>
                <li class="list_item">Tortuga</li>
                <li class="list_item">Tramonto</li>
                <li class="list_item">Winterlong</li>
              </ul>
            </div>
            <div class="col-lg-5">
              <h5>Teamplay</h5>
              <hr class="map-hr"/>
              <ul class="list1">
                <li class="list_item">Abandoned</li>
                <li class="list_item">Assault</li>
                <li class="list_item">Coastal</li>
                <li class="list_item">Dropdown</li>
                <li class="list_item">Eliminator</li>
                <li class="list_item">Forest</li>
                <li class="list_item">Loothill</li>
                <li class="list_item">Riobravo</li>
                <li class="list_item">Snowy</li>
                <li class="list_item">Station</li>
                <li class="list_item">Yosemite </li>
              </ul>
            </div>
          </div>
        </div>
        <br>

        <hr class="map-hr"/>
            <h3><strong>Classic</strong></h3>
        <hr class="map-hr"/>

        <p>The majority of classic maps are playable in Shootout, Team Shootout, Grand Elimination, Team Elimination and Break Bad. </p>

        <!-- <a href="cripplecreek.html"><h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4></a> -->
        <a class="headline_link" href="#"><h4 class="headline ps-2" title="Cripplecreek (page does not exist)">Cripplecreek</h4></a>
        <!-- <h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4> -->

        <p>Added in the August 26th 2014 update, Cripplecreek is a map of an old mining depot in a ravine in the mountains. 
            A train runs through the bottom area of the map while players move around through the top and bottom areas of the map during the game. 
            The Train is accessible and controllable by jumping onto it. This map was made by RedYager. 
        </p>

        <img loading="lazy" src="media/images/CrippleCreek.jpg" class="img-thumbnail" title="CrippleCreek" alt="CrippleCreek map image showing a mining depot in a ravine" data-bs-toggle="modal" data-bs-target="#creekModal">
        <figcaption><p class="imageCaption">CrippleCreek</p></figcaption>

        <div class="modal fade" id="creekModal" tabindex="-1" aria-labelledby="cripplecreekModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                            <img loading="lazy" src="media/images/CrippleCreek.jpg" class="modalImg img-fluid">
                        </div>
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <br>

        <!-- <a href="cripplecreek.html"><h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4></a> -->
        <a class="headline_link" href="#"><h4 class="headline ps-2" title="Depot (page does not exist)">Depot</h4></a>
        <!-- <h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4> -->

        <p>Added in the June 13th 2014 update, Depot is a depot with train tracks running down the middle of the map with buildings on either side of the train tracks.  
            A train moves along the rails back and forth during the game. This map was made by Resi. This map is in the ranked Shootout map rotation.
        </p>

        <img loading="lazy" src="media/images/Depot.jpg" class="img-thumbnail" title="Depot" alt="Depot map showing a depot with train tracks running down the middle with building on either side" data-bs-toggle="modal" data-bs-target="#depotModal">
        <figcaption><p class="imageCaption">Depot</p></figcaption>

        <div class="modal fade" id="depotModal" tabindex="-1" aria-labelledby="depotModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                            <img loading="lazy" src="media/images/Depot.jpg" class="modalImg img-fluid">
                        </div>
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <br>

        <!-- <a href="cripplecreek.html"><h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4></a> -->
        <a class="headline_link" href="#"><h4 class="headline ps-2" title="Desperados (page does not exist)">Desperados</h4></a>
        <!-- <h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4> -->

        <p>Desperados is a desert town with clay buildings making up the majority of the map.  
            Not shown in picture is a large underground dungeon area that can be accessed by going below the tower or another side entrance 
            at the bottom/front of the map. This map is a port of the custom Counter-Strike: Source map, cs_desperados, by jackennils and was ported to 
            Fistful of Frags by Rebel_Y and Freak. 
        </p>

        <img loading="lazy" src="media/images/Desperados.jpg" class="img-thumbnail" title="Depot" alt="Desperados map showing a clay town with a tower in one corner" data-bs-toggle="modal" data-bs-target="#desperadosModal">
        <figcaption><p class="imageCaption">Desperados</p></figcaption>

        <div class="modal fade" id="desperadosModal" tabindex="-1" aria-labelledby="desperadosModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                            <img loading="lazy" src="media/images/Desperados.jpg" class="modalImg img-fluid">
                        </div>
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <br>

        <!-- <a href="cripplecreek.html"><h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4></a> -->
        <a class="headline_link" href="#"><h4 class="headline ps-2" title="Fistful (page does not exist)">Fistful</h4></a>
        <!-- <h4 class="headline" title="Cripplecreek (page does not exist)">Cripplecreek</h4> -->

        <p>Fistful is a typical old western town complete with bar, horses, and even a bank. Seems to be modelled very clearly after 
            the Bank of El Paso as shown in For a Few Dollars More. This map was made by Rebel_Y.  
        </p>

        <img loading="lazy" src="media/images/Fistful.jpg" class="img-thumbnail" title="Fistful" alt="Fistful map showing an old western town with a bar and bank" data-bs-toggle="modal" data-bs-target="#fistfulModal">
        <figcaption><p class="imageCaption">Fistful</p></figcaption>

        <div class="modal fade" id="fistfulModal" tabindex="-1" aria-labelledby="fistfulModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-container container-fluid d-flex justify-content-center align-items-center">
                            <img loading="lazy" src="media/images/Fistful.jpg" class="modalImg img-fluid">
                        </div>
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>

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
                    <a class="popularList-item" href="#" title="Maps">
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
                <span class="comment-username pe-2">johnson john</span>
                <span class="comment-date">4/1/2024</span>
            </div>
            <div class="comment-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et 
                viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien.</p>
            </div>
            <div class="comment-actions">
                <button class="btn btn-sm btn-primary reply-button mt-2" <?php echo isset($_SESSION['user_id']) ? '' : 'style="display:none;"';; ?>>
                    Reply
                </button>
            </div>
        </div>
    
        <div class="comment-cont container">
            <div class="comment-header">
                <span class="comment-username pe-2">Bombom</span>
                <span class="comment-date">9/1/2023</span>
            </div>
            <div class="comment-body">
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="comment-actions" <?php echo isset($_SESSION['user_id']) ? '' : 'data-bs-toggle="tooltip" data-bs-placement="top" title="You need to be logged in to comment"'; ?>>
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