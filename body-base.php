<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container-fluid">
    <a class="navbar-brand" href="#offers">Offers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#signup">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#help">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#about">About</a>
            </li>
            <li class="nav-item">
            		<a class="nav-link text-white" href="#student_login">Student Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal" onclick="loadprivacypolicycontent()">Privacy and Policy</a>
            </li>
            <li class="nav-item">
            		<a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#termandservicemodal" onclick="loadtermandservicecontent()">Terms Of Service</a>
            </li>
        </ul>
    </div>
   </div>
</nav>

<div class="container-fluid mt-3">
<!-- Content -->
<div class="container mt-5">
    <h1>Street Avenue PhotoVid</h1>
    <p>Eonvher T. Andres Jr.</p>
    <hr />
    <p>Photographer | Videographer</p>
    <blockquote>Your first 10,000 photographs are your worst. Henri Cartier-Bresson</blockquote>
    <br>
    <p><i class="fas fa-envelope"></i><a style="text-decoration: none;" href="mailto:boor905@gmail.com?subject=Subject%20Here" target="_blank">&nbsp;boor905@gmail.com</a></p>
    <p><i class="fab fa-facebook-square"></i><a style="text-decoration: none;" href="https://www.facebook.com/profile.php?id=100093415254340">&nbsp;Fb page: Street Avenue PhotoVid</a></p>
</div>

<!-- Sections -->
<div class="container mt-5" id="offers">
    <h1>Our Offers</h1>
    <p>1st package 359 1pc 8R 8x10 | 2pcs 5R 5x7 | 4pcs 2R 25x3.5 ADDITIONAL 150 FOR 8R PICTURE FRAME IF EVER YOU WANT | FREE SOFT COPIES</p>
    <hr />
    <p>2nd package 299 1pc 8R 8x10 | 4pcs 2R 25x3.5 ADDITIONAL 150 FOR 8R PICTURE FRAME IF EVER YOU WANT | FREE SOFT COPIES</p>
</div>

<div class="container mt-5" id="about">
    <h1>About</h1>
</div>

<div class="container mt-5" id="login">
    <h1>Login</h1>
    <?php require 'login/login.php'; ?>
</div>

<div class="container mt-5" id="signup">
    <h1>Sign Up</h1>
    <?php require 'signup/signup.php'; ?>
</div>

<div class="container mt-5" id="student_login">
	<h1>Student Login</h1>
	<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="Auth_Upanel/student_page.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="lrnId">LRN ID:</label>
                            <input type="text" class="form-control" id="lrnId" name="lrnId" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" id="help">
    <h1>Help</h1>
</div>
</div>
<button id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<div class="modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacyPolicyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="privacyandpolicycontent">
                <!-- Privacy Policy content will be loaded dynamically here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="termandservicemodal" tabindex="-1" role="dialog" aria-labelledby="termsofservicemodallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsofservicemodallabel">Terms Of Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="termandservicecontent">
                <!-- Terms Of Service content content will be loaded dynamically here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
function loadprivacypolicycontent() {
	fetch('information_panel/pp.php')
		.then(response => response.text())
		.then(data => {
				document.getElementById('privacyandpolicycontent').innerHTML = data;
			})
			.catch(error => console.error('Error fetching privacy and policy content:', error));
	}
function loadtermandservicecontent() {
	fetch('information_panel/ts.php')
		.then(response => response.text())
		.then(data => {
				document.getElementById('termandservicecontent').innerHTML = data;
			})
			.catch(error => console.error('Error fetching terms of service content:', error));
	}
</script>
<script>
    $(document).ready(function(){
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
    $(window).scroll(function() {
       if ($(this).scrollTop() > 100) {
          $('#scrollToTopBtn').fadeIn();
            } else {
                $('#scrollToTopBtn').fadeOut();
            }
        });
        $('#scrollToTopBtn').click(function() {
            $('html, body').animate({scrollTop : 0}, 800);
            return false;
        });
</script>
</body>
