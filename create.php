<!DOCTYPE HTML>
<html>
<head>
<title>Luca’s Loaves</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
		
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Welcome to Luca’s Loaves
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="upload.html">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order online.php">Order Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = $username = $password =  "";
$name_err = $address_err = $salary_err = $username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name731 = trim($_POST["name731"]);
    if(empty($input_name731)){
        $name731_err = "Please enter a name.";
    } elseif(!filter_var($input_name731, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name731_err = "Please enter a valid name.";
    } else{
        $name731 = $input_name731;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }


        // Validate username
        $input_username = trim($_POST["username"]);
        // Prepare a select statement
        if(empty($input_username)){
            $username_err = "Please enter a username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', $input_username)){
            $username_err = "Username can only contain letters, numbers, and underscores.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM employees WHERE username = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $input_username ;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username =  $input_username ;
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    
        

    $input_password = trim($_POST["password"]);
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } else{
        $password = $input_password;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err) && empty($username_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name731, address, salary,username,password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_address, $param_salary , $param_username, $param_password);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_username = $username;
            $param_password = $password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>

    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

    <div class="hero">
      <div class="container">
        <h1>Welcome To Luca's Bread</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, consequuntur?</p>
      </div>
    </div>    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
 <!--================ start footer Area  =================-->	
 <footer class="footer-area p_120">
  <div class="container">
      
          <div class="col-lg-4 col-md-6 col-sm-6">
              <aside class="f_widget news_widget">
        <p>Stay updated with our latest trends</p>
        <div id="mc_embed_signup">
                      <form target="_blank" action="" method="get" class="subscribe_form relative">
                        <div class="input-group d-flex flex-row">
                              <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                              <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                          </div>				
                          <div class="mt-10 info"></div>
                      </form>
                  </div>
      </aside>
          </div>
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
      <div class="col-md-3 morb">
      <div class="footer" id="contact">
		<div class="container">
			<div class="col-md-3 nam">
				<h4>Namlacus dingi</h4>
					<ul class="number">
						<li><span><i class="phone"> </i>phone:(000) 888 88888</span>
						</li><li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>					
					</ul>
			</div>
			<div class="col-md-3 set">
				<h4>Setaliquam sil</h4>
					<p>Building name, street number, name of the City, State and Country.</p>
			</div>
			<div class="col-md-3 morb">
				<h4>Morbi odio</h4>
				<div class="stay">
					<div class="stay-left">
						<form>
							<input type="text" placeholder="" required="">
						</form>
					</div>
					<div class="button">
						<form>
							<input type="submit" value="Subscribe">
						</form>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 inte">
				<h4>Integer sagitest</h4>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="in"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
<!-- footer -->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyrights © 2015 Cappuccino All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- footer -->
</body>
</html>
