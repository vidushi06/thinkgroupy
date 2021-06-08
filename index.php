<?php include"header.php" ?>
<div class="carousel slide" data-ride="carousel" id="myslide">


  <div class="carousel-inner">

      <div class="carousel-item active" data-interval="6000">
           <img src="image/a.png" alt="First slide" class="img-fluid" style=" width: 100%;height: 600px;">
           
      </div>
      <div class="carousel-item" data-interval="6000">
           <img src="image/b.png" alt="First slide" class="img-fluid" style=" width: 100%;height: 600px;">

      </div>
      <div class="carousel-item" data-interval="6000">
           <img src="image/c.png" alt="First slide" class="img-fluid" style=" width: 100%;height: 600px;">

      </div>

         

  </div><!-- end carousel-inner-->


  <ul class="carousel-indicators">
     <li data-target="#a" data-slide-to="0" class="active"></li>
     <li data-target="#myslide" data-slide-to="1" class=""></li>
     <li data-target="#myslide" data-slide-to="2" class=""></li>
  </ul>

  
  <a href="#myslide" data-slide="prev" class="carousel-control-prev">
       <span class="carousel-control-prev-icon"></span>
  </a>

  <a href="#myslide" data-slide="next" class="carousel-control-next">
       <span class="carousel-control-next-icon"></span>
  </a>

</div><!-- carousel slide end-->
	<!--start of welcome-->
	<section id="z">
		<div class="container-fluid">

			<div class="container">
				
				<h3 class="ml-1">WELCOME TO<b style="color: #14a2f4;"> Thinkgroupy </b></h3>
				<br>

				<div class="row">

					<div class="col-md-7">
						<p class="text-justify banner-content">
							We are a startup that focuses primarily on cyber attacks and legit ways to find the bugs in other startup platforms and tell and help them to fix that vulnerability so that they don't suffer a loss. The best part is we aren't some experts in making our customers platform hack proof but we are a community where we bring all cyber experts , researchers, students, hackers to work legally and find a bug in our customers platforms such as Upstox ,etc to make internet a more safer place. 
							
						</p><br>
						<!--start of button-->
						<a _ngcontent-vau-c3="" routerlink="/about-us" class="button" href="#" style="background-color: #14a2f4;">FIND OUT MORE</a>
						
					</div><!--end of col md 7-->
					<br><br>
					<div class="col-md-5 inner"><center>
						<img src="image/d.png" style="width: 75%;box-shadow: 0 6px 20px 0 grey;margin-top: 25px;">
						</center>
					</div><!--end of col md 5-->
					
				</div><!--end of row-->

			</div><!--end of container-->

		</div><!--end of container-fluid-->
	</section>
	<!--end of welcome-->
	
	<!--start of signup-->
	<br><br><br><br><br>
	<section id="x">
		<div class="container-fluid media ">

			<div class="container">

				<div class="row">
					<div class="col-md-2"></div><!--end of col md 2-->

					<div class="col-md-8 text-center">
						
						<h1 style="margin-top: 102px;">SignUp</h1>

						<p class="text-justify" style="line-height: 40px; letter-spacing: 1px;color: white;">
							<!--start of signup form-->
							<form> 
							<div class="row"><!--start of row-->
								<div class="col-md-6">
									<input type="text" name="username" class="form-control" placeholder="enter username" required><br>
									<input type="email" name="email" class="form-control" placeholder="name@gmail.com" required>
								</div>
								<br>
								<div class="col-md-6">
									<input type="text" name="number" class="form-control" placeholder="enter valid number" required><br>
									<input type="password" name="password" class="form-control" placeholder="create password" required>
								</div>
							</div><!--end of row-->
							</form>
							<!--end of form--->
						</p><br>

						<a _ngcontent-dag-c3="" class="btn mtop" routerlink="/press-release" style="background-color:#14a2f4; border-radius: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color: white;width: 155px;" href="#">SUBMIT</a>

					</div><!--end of col md 8-->

					<div class="col-md-2"></div><!--end of col md 2-->
					
				</div><!--end of row-->
				
			</div><!--end of container-->

		</div><!--end of container fluid-->
	</section>
	<!--end of signup-->

	<!--start of us-->
	<section id="s">
		<div class="container-fluid">
			
			<div class="container">

				<h4 class="ml-1">EXPLORE<b style="color: #14a2f4;"> OUR SERVICES</b></h4>
				<br>
				<div class="row">

					<div class="col-md-3 text-center inner">
								
						<img src="image/e.png" style="width: 265px; height: 200px;">

					</div><!--end of col-md-3-->

					<div class="col-md-3 text-center inner">
								
						<img src="image/f.png" style="width: 265px;height: 200px;">

					</div><!--end of col-md-3-->

					<div class="col-md-3 text-center inner">
								
						<img src="image/g.png" style="width: 265px;height: 200px;">

					</div><!--end of col-md-3-->

					<div class="col-md-3 text-center inner">
								
						<img src="image/h.png" style="width: 265px;height: 200px;">

					</div><!--end of col-md-3-->

				</div><!--end of row-->

			</div><!--end of container-->

		</div><!--end of container fluid-->
	</section>
	<!--end of us-->
	<br>
	<!--start of login-->
	<section id="y">
		
		<div class="container-fluid media2">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-2"></div><!--end of col md 2-->

					<div class="col-md-8 text-center">
						<br><br>
						<h1  style="font-family:;color: #fff;font-size: 70px;">LOGIN</h1>

						<p class="text-justify" style="line-height: 40px; letter-spacing: 1px;color: white;">

							<form>
								<input type="text" name="email" class="form-control" placeholder="name@gmail.com" required>
								<br><br>
								<input type="password" name="password" class="form-control" placeholder="enter valid password" required>
							</form>
						</p>
						<br>
						<a _ngcontent-pan-c3="" class="btn mtop" routerlink="/all-brands" style="background-color:#14a2f4; border-radius: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 146px;height: 45px;padding: 9px;color: white;width: 146px;height: 45px;padding: 9px;" >LOGIN</a>

						<br>
						<ul>
							<li class="nav-item">
								Don't have an account!!
          <a href="#x" class="nav-link" style="color: white">signup</a></li>

       </ul>

					</div><!--end of col-md-8-->

					<div class="col-md-2"></div><!--end of col md 2-->


				</div><!--end of row-->

			</div><!--end of container-->

		</div><!--end of container fluid-->

	</section>
	<!--end of login-->

	<!--start of contact us-->
	<section id="v">

		<div class="container-fluid mainfooter">

			<div class="container">

				<div class="row">

					<div class="col-md-5" style="margin-top: 40px;margin-left: -40px;">
						<h1>Thinkgroupy</h1>
					</div><!--end of col-md-5-->

					<div class="col-md-7 ">
						<h2 style="font-size: 45px;">
							<span _ngcontent-god-c2="" style="color: #14a2f4;">CONTACT</span> US
						</h2>

						<p class="text-justify">
							We are a startup that focuses primarily on cyber attacks and legit ways to find the bugs in other startup platforms and tell and help them to fix that vulnerability so that they don't suffer a loss. The best part is we aren't some experts in making our customers platform hack proof but we are a community where we bring all cyber experts , researchers, students, hackers to work legally and find a bug in our customers platforms such as Upstox ,etc to make internet a more safer place.


						</p>

						<div class="row" style="margin-left: 2px;">

							<div class="col-md-6">
								
								<strong style=" color: #14a2f4;">Address</strong><br>
								<span style="color: white"> INDIA </span>

							</div><!--end of col inside row-->

							<div class="col-md-6">
								
								<strong style=" color: #14a2f4;">Enquiry</strong><br>
								<span style="color: white"> Mobile:<span style="color:#14a2f4; "> +91 **********</span></span><br>
								<span style="color: white"> email:<span style="color:#14a2f4; "> name@gmail.com</span></span>

							</div><!--end of col inside row-->

						</div><!--end of row in col-->
						<br>
						<div class="row" style="margin-left: 2px;">
							
							<div class="col-md-6">

								<strong style=" color: #14a2f4;">HR Enquiry</strong><br>
								<span style="color: white"> Mobile:<span style="color:#14a2f4; "> +91 **********</span></span><br>
								<span style="color: white"> email:<span style="color:#14a2f4; "> hr@gmail.com</span></span>
								 <br>
								 <a href="https://www.linkedin.com/">
									<i class="fa fa-linkedin-square" style="color:#14a2f4;font-size: 30px;"></i>
   								 </a>

								 <a href="https://www.facebook.com/">
									<i class="fa fa-facebook-official" style="color:#14a2f4;font-size: 30px;"></i>
   								 </a>

   								  <a href="https://twitter.com/">
									<i class="fa fa-twitter" style="color:#14a2f4;font-size: 30px;"></i>
   								 </a>

   								   <a href="https://www.instagram.com/?hl=en">
									<i class="fa fa-instagram" style="color:#14a2f4;font-size: 30px;"></i>
   								 </a>
							</div><!--end of col in row 2-->

							<div class="col-md-6">

								<strong style=" color: #14a2f4;">Other Enquiry</strong><br>
								<span style="color: white"> Mobile:<span style="color:#14a2f4; "> +91 **********</span></span><br>
								<span style="color: white"> email:<span style="color:#14a2f4; "> coustomercare@gmail.com</span></span>

							</div><!--end of col2 in row 2-->

						</div><!--end of row 2-->

					</div><!--end of col-md-7-->
				
				</div><!--end of row-->

			</div><!--end of container-->

		</div><!--end of container-fluid-->

	</section>
	<!--end of contact us-->
<?php include"footer.php" ?>