

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>S&N Jewellers</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="#" class="navbar-brand" />S & N Jewellery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto mt-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Jewellery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="necklaces.php">Necklaces</a>
          <a class="dropdown-item" href="rings.php">Rings</a>
          <a class="dropdown-item" href="earrings.php">Earrings</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latest.php">Latest Items</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>



    </ul>
  </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container mt-2">
	<div class="row">
		<div class="col">
		<h3><center><b>Contact Us</b></center></h3>

		<p>If you want know any information regarding our products or services please fill below form. We will reply you as soon as possible.</p>
	</div>
	</div>
</div>



<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 mx-auto">
			<div class="card ">
				<h2 class="text-center card-header bg-secondary">Contact Us</h2>
				<form action="validation.php" method="post">
			<div class="card-body">
				
			<div class="form-group">
				<label>Your Full Name:</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email Address:</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Message:</label>
				<textarea name="message" class="form-control" required style="height: 150px;"></textarea>
			</div>
			</div>
			<div class="footer">
				<div class="text-center">
				<button type="submit" name="submit" class="btn btn-secondary btn-ghost btn-ghost-bordered center-block"  style ="width:115px; ">Submit
					</button>
				</div>
			</div>
			</form>
			
			</div>
			</div>
	</div>
</div>





<footer>
  	<div id="sub-footer">
  	<div class="container mt-3 mb-5" style="margin-bottom: 1px solid;">
  		<div class="row">
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;" class="active"><a href="index.php" style="text-decoration: none;color: black">
  						Home</a>
  						</li>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;"><a href="about.php" style="text-decoration: none;color: black">About Us</a>
  						</li>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;"><a href="gallery.php" style="text-decoration: none;color: black">Our Collection</a>
  						</li>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;"><a href="latest.php" style="text-decoration: none;color: black">Latest Items</a>
  						</li>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;"><a href="contact.php" style="text-decoration: none;color: black">Contact Us</a>
  						</li>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
  				<div class="widget">
  						<li style="list-style: none; display: inline;"><a href="terms.php" style="text-decoration: none;color: black">Terms & Conditions</a>
  						</li>
  				</div>
  			</div>
  					
  		</div>
  	</div>
  	</div>
  	<div class="container mb-3">
  		<div class="row">
  			<div class="col-12 col-sm-6 col-md-4">
  				<div class="widget">
  					<h5 class="widgetheading">Get In Touch With Us</h5>
  					<address>
              <strong>S & N Jewellery</strong><br>
              1/12 Kamburupitiya<br> 
              Matara
            </address>
            <p><img src="images/9.png" alt=""/>0717040950<br>
              <a href="#" style="text-decoration: none;color: black"><img src="images/10.png" alt=""/>nalin@gmail.com</a>
            </p>
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4">
  				<div class="widget">
  					<h5 class="widgetheading">Information</h5>
  					
  						<li style="list-style: none;"><a href="terms.php" style="text-decoration: none;color: black">Terms & Conditions</a></li>
  						<li style="list-style: none;"><a href="about.php" style="text-decoration: none;color: black">About Us</a></li>
  					
  				</div>
  			</div>
  			<div class="col-12 col-sm-6 col-md-4">
  				<div class="widget">
  					<h5 class="widgetheading" style="text-decoration: none;color: black">Extras</h5>
  					<li style="list-style: none;"><a href="promo.php" style="text-decoration: none;color: black">Special Promotions</a></li>
  				</div>
  			</div>
  		</div>
  	</div>
    <div class="footer-area-bottom">
    <div class="container mb-2">
      <div class="row">
        <div class="col-12">
          <div class="copyright text-center">
            <p >Copyright &copy; 2019 S & N Jewellers. All Right Reserved.</p>
          </div>
          <div class="credits text-center">
              Designed by <a href="#">S&S Solutions</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>
</html>
