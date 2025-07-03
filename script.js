let lastScrollTop = 0;
const scrollThreshold = 50;

window.addEventListener("scroll", function(){
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && currentScroll >= scrollThreshold) {
        document.getElementById("navbar").classList.add("hidden");
    } else {
        document.getElementById("navbar").classList.remove("hidden");
    }

    lastScrollTop = currentScroll;
}, false);

// function myFunction() {
//     var element = document.body;
//     var isDarkMode = element.classList.toggle("dark-mode");
    
//     if (!isDarkMode) {
//         console.log("Light mode is back on.");
//     } else {
//         console.log("Dark mode has been turned on.");
//     }
// }

function toggleDarkMode() {
    var element = document.body;
    var isDarkMode = element.classList.toggle("dark-mode");
    updateDarkModeIcon(isDarkMode)
    // Save theme preference in a cookie
    var expirationDate = new Date();
    expirationDate.setFullYear(expirationDate.getFullYear() + 1); // Set expiration to 1 year from now
    document.cookie = "theme=" + (isDarkMode ? "dark" : "light") + "; SameSite=None; Secure; expires=" + expirationDate.toUTCString();
}

function updateDarkModeIcon(isDarkMode) {
    var icon = document.getElementById("darkModeIcon");
    if (isDarkMode) {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
        console.log("aaaa");
    } else {
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
    }
}

// Function to retrieve theme preference from cookie
function getThemePreference() {
    var cookies = document.cookie.split("; ");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].split("=");
        if (cookie[0] === "theme") {
            return cookie[1];
        }
    }
    return null; // Return null if theme cookie is not found
}

//apply selected theme on page load
window.onload = function() {
    var themePreference = getThemePreference();
    if (themePreference === "dark") {
        document.body.classList.add("dark-mode");
        updateDarkModeIcon(true);
    }
}

// document.addEventListener("DOMContentLoaded", function() {
//     var themePreference = getThemePreference();
//     if (themePreference === "dark") {
//         document.body.classList.add("dark-mode");
//         updateDarkModeIcon(true);
//     }
// });

var carousel = document.getElementById('carouselExample');
var readout = document.getElementById('carouselReadout');

if (readout) { // Check if the readout element exists
  function updateReadout() {
    var currentIndex = Array.from(document.querySelectorAll('.carousel-item')).indexOf(document.querySelector('.carousel-item.active'));
    var totalItems = document.querySelectorAll('.carousel-inner .carousel-item').length;
    readout.textContent = 'Image ' + (currentIndex + 1) + ' of ' + totalItems;
  }

  updateReadout();

  carousel.addEventListener('slid.bs.carousel', function () {
    updateReadout();
  });
}



//rating system

var $rateYo = $("#rateYo-set").rateYo();
var submitSuc = document.querySelector('.submitSuc');
var ratingCont = document.querySelector('.rating-cont');

if (ratingCont) {
    var pageId = $("#pageId").val(); // Retrieve the page ID from the hidden input field

    if ($rateYo) {
        $(function () {
            $("#getRating").click(function () {
                var rating = $rateYo.rateYo("rating");
                console.log("The rating is set to " + rating + "!");

                // Step 1: Retrieve current rating data from the server
                $.get("rating_handler.php", { pageId: pageId }, function (data) {
                    var ratingData = JSON.parse(data);
                    var currentTotalVotes = parseInt(ratingData.totalVotes);
                    var currentAverageRating = parseFloat(ratingData.averageRating);

                    // Step 2: Calculate new average rating and total votes
                    var newTotalVotes = currentTotalVotes + 1;
                    var newAverageRating = ((currentAverageRating * currentTotalVotes) + rating) / newTotalVotes;

                    // Step 3: Update database with new rating data
                    $.post("rating_handler.php", {
                        totalVotes: newTotalVotes,
                        averageRating: newAverageRating,
                        pageId: pageId // Include pageId in the POST data
                    }).done(function (data) {
                        console.log(data);
                        console.log("Rating data updated successfully!");
                    }).fail(function (xhr, status, error) {
                        console.error("Failed to update rating data: " + error);
                    });

                    // Step 4: Update UI with new rating data
                    rateYoRead.rateYo("rating", newAverageRating);
                    counter.innerText = newAverageRating.toFixed(2);
                    ratingNum.innerText = "(" + newTotalVotes + ")";
                });
                $rateYo.rateYo("destroy");
                submitSuc.style.cssText = "display: block !important";
                ratingCont.style.cssText = "display: none !important";
            });

            $.get("rating_handler.php", { pageId: pageId }, function (data) {
                var ratingData = JSON.parse(data);
                var currentTotalVotes = parseInt(ratingData.totalVotes);
                var currentAverageRating = parseFloat(ratingData.averageRating);

                rateYoRead.rateYo("rating", currentAverageRating);
                counter.innerText = currentAverageRating.toFixed(2);
                ratingNum.innerText = "(" + currentTotalVotes + ")";
            });

            $("#rateYo-set").rateYo("option", "fullStar", true);

            var counter = document.querySelector(".counter");
            var rateYoRead = $("#rateYo-read");
            var ratingNum = document.querySelector(".rating-num");

            // Function to update the rating and counter with a given value
            if (counter && ratingNum) {
                function updateRatingAndCounter(value) {
                    var currentTotalRating = parseFloat(counter.innerText) || 0; // Get the current total rating
                    var currentNumRatings = parseInt(ratingNum.innerText.replace(/\(|\)/g, ''), 10) || 0; // Get the current total number of ratings
                    var newAverageRating = ((currentTotalRating * currentNumRatings) + value) / (currentNumRatings + 1);

                    rateYoRead.rateYo("rating", newAverageRating);
                    counter.innerText = newAverageRating.toFixed(2);
                    ratingNum.innerText = "(" + (currentNumRatings + 1) + ")";
                }

                rateYoRead.rateYo({
                    starWidth: "20px",
                    rating: 0,
                    readOnly: true
                });
            }
        });
    }
}


//Check if user has already rated the page 
if (ratingCont) {
    $(document).ready(function() {
        function checkUserRating() {
            var pageId = parseInt($("#pageId").val().trim());
            console.log("Page ID:", pageId); // Debugging output
            // Send AJAX request to check if the user has already rated the page
            $.get("check_user_rating.php", { pageId: pageId }, function(data) {
                // Parse the response
                var response = JSON.parse(data);
                // Check if the user has already rated the page
                if (response.success && response.hasRated) {
                    // User has already rated the page, disable the "Submit rating" button
                    $("#getRating").prop("disabled", true);
                    $rateYo.rateYo("destroy");
                    submitSuc.style.cssText = "display: block !important";
                    ratingCont.style.cssText = "display: none !important";
                } else {
                    // User has not rated the page, enable the "Submit rating" button
                    // $("#getRating").prop("disabled", false);
                }
            });
        }
        // Call the function to check user rating when the page loads
        checkUserRating();
    });
}



//client-side comment system


function updateCommentCount() {
    var commentCountElement = document.getElementById("commentCount");
    var commentCount = document.querySelectorAll('.comment-cont').length;
    if(commentCountElement){
        commentCountElement.textContent = commentCount + " comments";
    }
}

updateCommentCount();

var replyButtons = document.querySelectorAll(".reply-button");
var writeCommentButton = document.querySelector(".write-comment-button");
var commentForm = document.getElementById("commentForm");
var commentTextarea = document.getElementById("commentText");
var turnOffButton = document.getElementById("turnOffButton");
var commentContainer = document.querySelector(".comment-container");

if (writeCommentButton) {
    // Event delegation for reply buttons
    commentContainer.addEventListener("click", function(event) {
        if (event.target.classList.contains("reply-button")) {
            var commentCont = event.target.closest('.comment-cont');
            commentCont.appendChild(commentForm); // Append form to the container of the button clicked
            commentForm.style.display = "block";
            commentForm.style.marginLeft = "40px"; // Set margin for reply
            updateCommentCount();
        }
    });

    writeCommentButton.addEventListener("click", function() {
        // Append comment form to the end of the comment container
        commentContainer.appendChild(commentForm);
        // Display the comment form
        commentForm.style.display = "block";
        commentForm.style.marginLeft = "0px"; // Reset margin for new comment
        updateCommentCount();
    });

    turnOffButton.addEventListener("click", function() {
        // Clear the textarea
        commentTextarea.value = "";
        // Hide the comment form
        commentForm.style.display = "none";
    });

    // Submit comment
    commentForm.addEventListener("submit", function(event) {
        event.preventDefault();
        var commentText = commentTextarea.value.trim();
    
        if (commentText !== "") {
            var newComment = document.createElement("div");
            newComment.classList.add('comment-cont', 'container');

            var isDirectReply = commentForm.parentNode !== commentContainer;
    
            if (!isDirectReply) {
                // If it's a new comment, insert it before the comment form
                commentContainer.insertBefore(newComment, commentForm);
            }
            else {
                // If it's a direct reply comment, insert it after the comment it's replying to
                var directReplyContainer = commentForm.previousElementSibling;
                directReplyContainer.parentNode.insertBefore(newComment, directReplyContainer.nextSibling);
            }
    
            var commentHeader = document.createElement("div");
            commentHeader.classList.add("comment-header");
            commentHeader.innerHTML = `<span class="comment-username pe-2">username</span>
                                       <span class="comment-date">${getCurrentDate()}</span>`;
            var commentBody = document.createElement("div");
            commentBody.classList.add("comment-body");
            commentBody.textContent = commentText;
            newComment.appendChild(commentHeader);
            newComment.appendChild(commentBody);

            // Add reply button to the new comment
            var replyButton = document.createElement("button");
            replyButton.classList.add("btn", "btn-sm", "btn-primary", "reply-button", "mt-2");
            replyButton.textContent = "Reply";
            newComment.appendChild(replyButton);
    
            // Clear the textarea
            commentTextarea.value = "";
            // Hide the comment form
            commentForm.style.display = "none";
            updateCommentCount();
        }
    });
}

// Function to get current date in format MM/DD/YYYY
function getCurrentDate() {
    var now = new Date();
    var month = now.getMonth() + 1;
    var day = now.getDate();
    var year = now.getFullYear();
    return month + "/" + day + "/" + year;
}


    var signInForm = document.getElementById("signInForm");
    var signUpForm = document.getElementById("signUpForm");
    
    var signInLink = document.getElementById("signInLink");
    var signUpLink = document.getElementById("signUpLink");

    if (signInForm && signUpForm) {
        signUpLink.addEventListener("click", function(event) {
            event.preventDefault();
            
            // Toggle the display of sign-in and sign-up forms
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });
    
        signInLink.addEventListener("click", function(event) {
            event.preventDefault();
            
            // Toggle the display of sign-in and sign-up forms
            signUpForm.style.display = "none";
            signInForm.style.display = "block";
        });
    }

var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

if(password){
    function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
}


    var changeNameButton = document.getElementById("changeNameBtn");

    if(changeNameButton){
        changeNameButton.addEventListener("click", function() {
            var form = document.getElementById("nameForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                setTimeout(function() {
                    form.style.display = "none";
                }, 200);
            }
        });
    }

    var changePasswordBtn = document.getElementById("changePasswordBtn");

    if(changePasswordBtn){
        changePasswordBtn.addEventListener("click", function() {
            var form = document.getElementById("passwordForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                setTimeout(function() {
                    form.style.display = "none";
                }, 200);
            }
        });
    }
