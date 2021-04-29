<?php

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">

								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
     <option value="">-- Select --</option><option value="Noida" >Noida</option><option value="Lucknow" >Lucknow</option><option value="Kanpur" >Kanpur</option><option value="Agra" >Agra</option><option value="Srinagar" >Srinagar</option><option value="Chandigarh" >Chandigarh</option><option value="Mohali" >Mohali</option><option value="Bhopal" >Bhopal</option><option value="Jaipur" >Jaipur</option><option value="Patna" >Patna</option><option value="Odisha" >Odisha</option><option value="Guwhati" >Guwhati</option><option value="Bangalore" >Banglore</option><option value="Chennai" >Chennai</option><option value="Ahemdabad" >Ahemdabad</option><option value="Nagpur" >Nagpur</option><option value="Mumbai" >Mumbai</option><option value="Pune" >Pune</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							Blood Donation Is The Act Of Giving Blood To Someone Who Needs It. It Is Not Just About Giving Blood, But It Is An Act Of Kindness That Saves The Lives Of Hundreds Of People. These Fifteen Minutes Of Your Life Can Save Someone’s Entire Life. You Can’t Even Imagine That Donating One Bag Of Blood Can Be So Beneficial To The Human Race. Donating The Blood Without Expecting Or Asking For Any Money Or Gesture Is A Great Act Of Kindness, And If You Are 18 Years Old Or Above, You Should Definitely Take Part In This Act Of Kindness.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->


			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life.Your blood saves more than one life when it is separated into its components (red blood cells, plasma etc.).
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life.Your blood saves more than one life when it is separated into its components (red blood cells, plasma etc.).
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life.Your blood saves more than one life when it is separated into its components (red blood cells, plasma etc.).
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>
