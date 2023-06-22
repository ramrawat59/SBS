<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Seat Booking System</title>
 
    <style>
    #llog{
    text-align: center;
    margin-top: 25px;
    color:;
    font-size: xx-large;
    }  
    </style>
  </head>

  <body>
  

  <header>
        <h2 class="logo">Seat Booking System</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Disabled</a>
            <button class="btnlogin-popup">Login</button>
        </nav> 
    </header>
  </div>
</nav>
</div>
<!-- end of navbar -->

<!-- Start -->
<div class="col-sm-12">
<div class="row">

<div class="col-sm-3">
    <img src="img/seats.jpg" width="1080" height="680px;" style="margin-top:20px"/>
    </div>
    <div class="col-sm-9">
        <div id="sidebar" style="float:center">
        <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h2 style="font-family:cursive; margin-top:25px; color:blue;">Apply For Booking </h2>
                            <hr>
						</div>
						<form action="controller.php" method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" name="name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Enter your email" name="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number" name="phone">
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<input class="form-control" type="text" placeholder="Enter ZIP/Location" name="pickup_location">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" placeholder="Enter ZIP/Location" name="destination">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" required name="pickup_date">
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
										<input type="time" name="time" class="form-control" style="width:200px;">
												<span class="select-arrow"></span>
											</div>
										</div>
										
										<!-- <div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control" name="am">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div> -->
									</div>
								</div>
							</div>
							<div class="form-btn">
								<input type="submit" class="btn btn-primary" name ="btn_book"value="book">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</div>
</div>
</div>

<!--  End of col-sm-12 offset-2  -->


</div>   
  </body>
</html>
 <!-- Optional JavaScript; choose one of the two! -->

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   