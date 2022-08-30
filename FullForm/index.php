<?php



@include_once("connect.php");
$query1="SELECT * FROM form1";
$show = mysqli_query($conn,$query1);
?>


<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width">
       <title> Development </title>
	   
	   <!-- Bootstrap -->
	   <link rel="stylesheet" href="css/bootstrap.css"/>
	   <link rel="stylesheet" href="css/mystyle.css"/>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	   <script src="bootstrap-3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 0px solid ;
	  text-align: left;
	  padding: 8px;
	}
   tr {
      border-bottom: 1px solid #ddd;
    }
	
	
	  tr:nth-child(even) {
	  background-color: rgba(150, 212, 212, 0.4);
	}

</style>

   </head>
    <body>
	          <!-- Header -->
	     <div class="container-fluid top_bar">
		     <div class="container">
		          <div class="row">
		             <div class="col-sm-3">
					     <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="icons">
						 <i class="fa fa-facebook" style="font-size:20px; padding-right: 10px;"></i></a>
                         <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="icons">
						 <i class="fa fa-twitter" style="font-size:20px; padding-right: 10px;"></i></a>
		                 <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="icons">
						 <i class="fa fa-youtube" style="font-size:20px; padding-right: 10px;"></i></a>
						 <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus" class="icons">
						 <i class="fa fa-google-plus" style="font-size:20px; padding-right: 10px;"></i></a>
		             </div><!-- End of col -->
					 <div class="col-sm-9 text-right contact_info">
		                  <span class="glyphicon glyphicon-envelope"></span> maria.chowdhury6161@gmail.com &nbsp;&nbsp;&nbsp;
						  <span class="glyphicon glyphicon-earphone"></span> +8801759568821
		             </div><!-- End of col -->
		          </div><!-- End of row -->
		     </div><!-- End of container -->
		 </div><!-- End of Header -->
	
	                   <!-- Logo 7 Navbar -->
		
		<div class="container">
		     <div class="row">
		      <div class="col-sm-5">
			       <img src="img/Logo.jpg" style="margin-top:10px;"/>
		      </div>
		      <div class="col-sm-7 my_menu">
			        <nav class="navbar navbar-default">
					     
					  <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
						      <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
						  </button>
					  </div><!-- End of navbar Header-->
					
					   <div class="collapse navbar-collapse" id="mynavbar">
					     <ul class="nav navbar-nav pull-right">
						     <li class="active"><a href="index.html">Home</a></li>
							 <li><a href="#about">About</a></li>
							 <li><a href="#courses">Courses</a></li>
							 <li><a href="#team">Our Team</a></li>
							 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
			                  Student <span class="caret"></span></a>
								<ul class="dropdown-menu">
								   <li><a href="reg.html"> Registation</a></li>
								   <li><a href="update.html">Update</a></li>
								   <li><a href="search.html">search</a></li>
								   
						           <li><a href="delete.html">Delete</a></li>
							  </ul>
			              </li>
							 <li><a href="#cont">Contact</a></li>
						 </ul>
					    </div><!-- End of collapse-->	 
					</nav>
		      </div>
		     </div><!-- End of row -->
		</div><!-- End of container -->
		
		           
	    
	
			   
			   <!-- Delete Form -->
 <div class="container-fluid our_course">
			    <div class="container" id="show">
						<h1 class="text-center" style="margin-top:10px;"><?php echo " Data Inserted ";?></h1>
						<table style="width:100%;">
								<tr>
									<th colspan="11"><h2 align="center">Student Record</h2></th>
								</tr>
								<th>ID</th>
								<th>Name</th>
								<th>Father Name</th>
								<th>Mother Name</th>
								<th>Nationality</th>
								<th>Death of Birth</th>
								<th>Religion</th>
								<th>Phone</th>
								<th>Parmanent Address</th>
								<th>Gender</th>
								<th>Technology</th>
							
							<?php 
							while($row=mysqli_fetch_assoc($show))
							{
							?>
							<tr>
							     <td><?php echo $row['id']; ?></td>
								 <td><?php echo $row['name']; ?></td>
								 <td><?php echo $row['father']; ?></td>
								 <td><?php echo $row['mother']; ?></td>
								 <td><?php echo $row['nation']; ?></td>
								 <td><?php echo $row['birth']; ?></td>
								 <td><?php echo $row['religion']; ?></td>
								 <td><?php echo $row['phone']; ?></td>
								 <td><?php echo $row['address']; ?></td>
								 <td><?php echo $row['gender']; ?></td>
								 <td><?php echo $row['technology']; ?></td>
                            </tr>
                        <?php						
							}
                        ?>

						</table>
                </div>
 </div>
    <!-- Footer-->
				
		<div class="container-fluid footer">
		    <div class="container" id="cont">
			    <div class="col-sm-4">
				      <img src="img/Logo.jpg" style="margin-top:10px;"/>
					  <p id="cont">Student Online admissions are a vital part of any university&#39;s running because students are what
						keep a University alive. The Student admission is one of the most important activities within a
						university as one cannot survive without students. </p>
						  
						  <p><a href="" class="btn btn-danger">read more...</a></p>
                </div>
				 <div class="col-sm-4" style=" padding-left: 120px;">
				     <h3>QuicK Links</h3>
					 <ul>
					    <li><a href="" id="cont">&raquo; Home</a></li>
						<li><a href="" id="cont">&raquo; About</a></li>
						<li><a href="" id="cont">&raquo; Services</a></li>
						<li><a href="" id="cont">&raquo; Products</a></li>
						<li><a href="" id="cont">&raquo; Contact Us</a></li>
					 </ul>
                </div>
				 <div class="col-sm-4" style="color:gray; padding-left: 60px; padding-right: 10px;">
				      <h3>Contact Detials</h3>
					  <p id="cont"><strong>Address : </strong>209/1 Nobinbag,Gopalganj(Dhaka)</p>
					  <p id="cont"><strong>E-mail : </strong>info.123@gmail.com</p>
					  <p id="cont"><strong>Phone : </strong>+8801759568821</p>
                </div>
            </div>
           <hr></hr>
		   
		   				 
			 <div class="col-sm-12" style="padding-left: 1200px; padding-right: 10px;">
			             <h4> Follow Us : <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="icons">
						 <i class="fa fa-facebook" style="font-size:20px;padding-right: 10px;"></i></a>
                         <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="icons">
						 <i class="fa fa-twitter" style="font-size:20px; padding-right: 10px;"></i></a>
		                 <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="icons">
						 <i class="fa fa-youtube" style="font-size:20px; padding-right: 10px;"></i></a>
						 <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus" class="icons">
						 <i class="fa fa-google-plus" style="font-size:20px; padding-right: 10px;"></i></a></h4>
					     
						 
		             </div>
			
        </div>	
		        <!-- End of Footer -->
		
	      <script type="text/javascript" src="js/jquery.js"></script>
		  <script type="text/javascript" src="js/bootstrap.js"></script>
		  <script type="text/javascript">
		  $(document).ready(function(){
		     $('[data-toggle="tooltip"]').tooltip();
		  });
		  
		  </script>
    </body>
</html>