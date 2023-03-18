<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Complaint</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
		  <img src="images/logo.jpg" alt="header" id="img">
            <span>
             Maintenance Branch <br>
			<p>University of Vavuniya<p>
            </span>
			 
			
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Staff </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Complaints</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Complaint Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
							<div class="input-group">
                            <label class="label">Division :</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department">
                                    <option disabled="disabled" selected="selected">Division :</option>
                                    <select id="division" name="division">
										<option value="Registrar Office">Registrar Office</option>
	<option value="Examination & Student Admission">Examination & Student Admission</option>
	<option value="Student & Welfare Division">Student & Welfare Division</option>
	<option value="Administration Branch">Administration Branch</option>
	<option value="Establishments Branch">Establishments Branch</option>
	<option value="Academic Affairs & Publication Branch">Academic Affairs & Publication Branch</option>
	<option value="Maintenance Branch">Maintenance Branch</option>
	<option value="Internal Audit">Internal Audit</option>
	<option value="IT Centre">IT Centre</option>
	<option value="Faculty of Applied Science">Faculty of Applied Science</option>
    <option value="Faculty of Business Studies">Faculty of Business Studies</option>
    <option value="Faculty of Technology">Faculty of Technology</option>
									  </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Work Location :</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>
							<div class="input-group">
                            <label class="label">Employee Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                               <select id="emp_type" name="emp_type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                   
					<option value="Head">Head</option>
					<option value="Employee">Employee</option>
					<option value="Student">Student</option>
					
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
							 <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Works to be done :</label>
                                    <input class="input--style-4" type="textarea" name="confirm_password">
                                </div>
                            </div>
							
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Works to be done :</label>
                                    <input class="input--style-4" type="textarea" name="confirm_password">
                                </div>
								
								<h4>Requested By :</h4>

    <label for="title">Title :</label><br>
    <input type="radio" id="mr" name="title" >
    <label for="mr">Mr</label>
    <input type="radio" id="miss" name="title" >
    <label for="miss">Miss</label>
    <input type="radio" id="mrs" name="title">
    <label for="mrs">Mrs</label><br><br>
                            </div>
							
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name :</label>
                                    <input class="input--style-4" type="text" name="confirm_password">
                                </div>
                            </div>
							
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contact No:</label>
                                    <input class="input--style-4" type="number" name="confirm_password">
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <h2>
               OUR LOCATION AT VAVUNIYA
              </h2>
              <p>
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.2925471508847!2d80.40850671414817!3d8.758521595579644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc3fe4726e2c2b%3A0xd8b535c8d89cbc3c!2sUniversity%20of%20Vavuniya%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1644137446421!5m2!1sen!2slk" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-nav">
              <h4>
                Navigation
              </h4>
              <ul>
                <li>
                  <a href="index.html">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.html">
                   Staff
                  </a>
                </li>
                <li>
                  <a href="service.html">
                    Complaints
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
                <li>
                  <a href="#">
                    Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-contact">
              <h4>
                Contact Info
              </h4>
              <div class="location">
                <h6>
                   Office Address:
                </h6>
                <a href="">
                  <img src="images/location.png" alt="">
                  <span>
                   Pampaimadu,Vavuniya,Sri Lanka.
                  </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Contact Number:
                </h6>
                <a href="">
                  <img src="images/telephone.png" alt="">
                  <span>
                    Tel : +94 24 222 2265<br>
					Fax : +94 24 222 2265<br>
					<a href = "mailto: info@vau.ac.lk">Email : info@vau.ac.lk</a>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="discover">
              <h4>
                Discover
              </h4>
              <ul>
                <li>
                  <a href="">
                    Help
                  </a>
                </li>
              
                <li>
                  <a href="">
                    subscribe
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
              <div class="social-box">
                <a href="">
                  <img src="images/facebook.png" alt="">
                </a>
                <a href="">
                  <img src="images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/google-plus.png" alt="">
                </a>
                <a href="">
                  <img src="images/linkedin.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">University of Vavuniya</a>
      </p>
    </section>
    <!-- footer section -->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->