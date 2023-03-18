<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Heustonn</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
 body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h1,h2,h3{
  text-align:center ;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

	 

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
		  <img src="logo.jpg" alt="header" id="img">
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
                  <a class="nav-link" href="page.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="staff.php">Staff </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="complaintpage.php"> Complaints</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
				<a class="nav-link" href="logout.php" >Logout</a>
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


<h3>Complaint Form</h3>

<div class="container">
  <form action="insert.php">

    <label for="division">Division :</label>
    <select id="division" name="division">
	<option value="Registrar">Registrar Office</option>
	<option value="Exam">Examination & Student Admission</option>
	<option value="Welfare">Student & Welfare Division</option>
	<option value="Administration">Administration Branch</option>
	<option value="Establishment">Establishments Branch</option>
	<option value="Academic">Academic Affairs & Publication Branch</option>
	<option value="Maintenance">Maintenance Branch</option>
	<option value="Audit">Internal Audit</option>
	<option value="ITCentre">IT Centre</option>
	<option value="applied science">Faculty of Applied Science</option>
    <option value="business">Faculty of Business Studies</option>
    <option value="technology">Faculty of Technology</option>
  </select>
  
	<label for="wlocation">Work Location :</label>
    <input type="text" id="wlocation" name="worklocation" placeholder="Enter the work place..">
	
	<label for="work">Works to be done :</label><br>
    <textarea id="work" name="work" rows="10" cols="20" ></textarea><br><br>
	
	Look forward for your kind assistance in this regard,<br>
	Thank you.<br><br><br>
	
	<h4>Requested By :</h4>

    <label for="title">Title :</label><br>
    <input type="radio" id="mr" name="title" >
    <label for="mr">Mr</label>
    <input type="radio" id="miss" name="title" >
    <label for="miss">Miss</label>
    <input type="radio" id="mrs" name="title">
    <label for="mrs">Mrs</label><br><br>

    <label for="fname">Name :</label>
    <input type="text" id="name" name="name" placeholder="Your name..">


    <label for="mobile">Contact No :</label><br>
    <input type="number" id="mobile" name="mobile" placeholder="Your mobile Number.."><br><br><br>


    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>