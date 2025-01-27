<?php include'head.php';?>
<body>
      <div class="container-fluid" style="background-color: black">
        <div class="container " style="background-color: black">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black">
                    <a class="navbar-brand" href="index.php"><img src="img/thegym-logo.jpg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="find_gym.php">FIND THE GYM</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="classes.php">CLASSES</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="membership.php">MEMBERSHIP</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="franchise.php">FRANCHISE</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="faq.php">FAQ</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                </div>
            </nav>  
        </div>
    </div>
    <!---------------------Main Poster Img------------------------->
          <div class="container-fluid bg1"> 
            <div class="container text-center py-5">
              <h1 class="py-5 text-light p-5"></h1>
            </div>
          </div>
       			<div class="container py-5">
               		<div class="row">
                    <div class="col-sm-6">
                      <h1 class="py-5">Address</h1>
                      <div class="row">
                        <div class="col-sm-1">
                          <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-sm-11">
                          <ul style="list-style: none;">
                            <li class="font-weight-bold"><i>Tucson Fitness Pvt Ltd</i></li>
                            <li>J-13/66, Rajouri Garden</li>
                            <li>Next to Kotak Mahindra Bank</li>
                            <li>New Delhi-110027</li>
                          </ul>
                       </div>
                       <div class="col-sm-1">
                          <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="col-sm-11">
                          <ul style="list-style: none;">
                            <li>+91.11.45535888</li>
                          </ul>
                       </div>
                       <div class="col-sm-1">
                          <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-sm-11">
                          <ul style="list-style: none;">
                            <li>+91.9811594828</li>
                          </ul>
                       </div>
                       <div class="col-sm-1">
                          <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-sm-11">
                          <ul style="list-style: none;">
                            <li>info@thegym.in</li>
                          </ul>
                       </div>
                       <div class="col-sm-1">
                          <i class="fas fa-globe"></i>
                        </div>
                        <div class="col-sm-11">
                          <ul style="list-style: none;">
                            <li>www.thegym.in</li>
                          </ul>
                       </div>
                        </div>
                    </div>
               			<div class="col-sm-6">
                      <h1 class="py-5">Contact Us</h1>
               				<form id="my_form" onsubmit="submitForm(); return false;">
					    		<div class="row">
					     			<div class="form-group col-lg-6">
					      				<label for="Name">Name:</label>
					      					<input id="n" class="form-control" type="text" required="" autocomplete="off" style="border-radius:0;font-size: 14px;">
					                        </div>
	
    								<div class="form-group col-lg-6">
      									<label for="email">Contact:</label>
      										<input id="c" class="form-control" type="number" required="" autocomplete="off" style="border-radius:0;font-size: 14px;">
									</div>
								</div>
								<div class="row">
    								<div class="form-group col-lg-12">
      									<label for="email">Email:</label>
                          					<input id="e" class="form-control" type="email" required="" autocomplete="off" style="border-radius:0;font-size: 14px;">
									</div>
								</div>
								<div class="row">
								    <div class="form-group col-lg-12">
								      <label for="pwd">Message:</label>
								       <textarea id="m" class="form-control" rows="7" required="" autocomplete="off" style="border-radius:0;font-size: 14px;"></textarea>
								    </div>
								</div>
								<div class="row">
								    <div class="form-group col-sm-12">
								               <div id="recaptcha" class="g-recaptcha" data-sitekey="6LenA5gUAAAAAAkL3pxLcWKp6ZWY6qB4_YJQGNcG"></div>
								         					<span class="msg-error error"></span>
								                        </div>
								                    </div>
								                        <div class="row float-right">
								                        <div class="form-group col-sm-12">
								                          <button id="mybtn" type="submit" class="btn btn-dark" style="width:100%;">Submit</button>
								                          <span id="status"></span>
								                       </div> 
								                   </div>
								</form>
               		
               				</div>
           			</div>
               </div>
                <!----------------------Footer----------------------------->
                <div class="container-fluid  text-light py-5" style="background-color: black;">
                   <div class="container">
                    
                        <div class="row">
                            <div class="col-sm-12 text-center">
                            <a href="#" class="fa fa-facebook px-3 text-danger fa2"></a>
                            <a href="#" class="fa fa-twitter px-3 text-danger fa2"></a>
                            <a href="#" class="fa fa-linkedin px-3 text-danger fa2"></a>
                            <a href="#" class="fa fa-instagram px-3 text-danger fa2"></a><br><br>
                            <span style="font-size: 12px;">The Gym � 2019 Tucson Fitness Pvt. Ltd.</span>
                        </div>
                        </div>
                    </div>
                </div>
  
  
</body>