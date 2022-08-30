<?php
$id=$_POST["id"];


@include_once("connect.php");
$query="SELECT * FROM form1 WHERE id='".$id."'";
$res = mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$Name=$row["name"];
$Phone=$row["phone"];
$Father=$row["father"];
$Birth=$row["birth"];

if($row!=0)
{
	
}	

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
								   <li><a href="Show Data.php">Show Data</a></li>
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
		
		           
	    
	
			   
			   <!-- Registation Form -->
<div class="container-fluid our_course">
			       <div class="container" id="reg">
                           <h1 class="text-center"style="color: #fff; padding-bottom:10px;">Search Result</h1> 				   
			         <div class="row">
			                 <div class="panel panel-info">
      <div class="panel-heading">
	      <h7 style="font-family:Castellar; font-size:25px"> Form </h7>
	  </div>
	  <div class="panel-body">
	     <form action="action.php" method="post" name="reg">
		     <div class="row padding-bottom-10">
			      <div class="col-md-6">
			          <label for="Name" class="control-label"> Name : </label>
				 </div>
				 <div class="col-md-6">
				      <label for="Father's Name" class="control-label"> Father's Name : </label>
				 </div> 
				 
			 </div>
		 
		    
			 
		     <div class="row padding-top-10">
			    <div class="col-md-6"style="padding-bottom: 20px;">
			          <input type="text" class="form-control" name="Name" id=" Name" value="<?php echo"$Name"; ?>"/>
				 </div>
				 
				 <div class="col-md-6"style="padding-bottom: 20px;">
				      <input type="text" class="form-control" name="father_Name" id="father_Name"  value="<?php echo"$Father"; ?>"/>
				 </div>
				 
			 </div>
			
			
			 
			 <div class="row padding-top-10">
			     <div class="col-md-6">
				      <label for="Death of Birth" class="control-label"> Death of Birth : </label>
				 </div>
				 
				 
				 <div class="col-md-6">
				      <label for="phone" class="control-label"> Phone : </label>
				 </div>
			 </div>
			 
			 
			  <div class="row padding-top-10">
					 <div class="col-md-6"style="padding-bottom: 20px;">
						  <input type="date" class="form-control" id="Death of Birth" value="<?php echo"$Birth"; ?>"/>
					 </div>
					
					
					 
					 <div class="col-md-6"style="padding-bottom: 20px;">
						   <input type="text" class="form-control" id="" value="<?php echo"$Phone"; ?>"/>
					 </div>
				 
			 </div>			
			 
		   </form> 	
		 </div>	 
	   </div>
	 </div>
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

