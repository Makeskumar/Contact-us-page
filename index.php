<!doctype html>
<html class="no-js" lang="en">

    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Contact Us</title>

       

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
      <style>
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			
		}
img{
	border-radius: 20px;
}
.form-control {
 
    font-size: 1.1rem !important;
   
}
		body{
			height: 100vh;
			background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
			}
			@media screen and (min-width:768px) {
				#content-place{
					margin-top: 8%;
					
				}
				img{
					margin-top:-10px;
				}
			}
		</style>



    </head>
	
	<body>

	<section >
			
			<div class="container text-center">
			<div class=" text-center ">
				</div>
					<div class="row text-center" id="content-place">
					<h1 class="text-white text-center mb-5">CONTACT FORM</h1>
		
						<div class="col-1"></div>
						<div class="col-md-5 col-sm-12">
						
									<form action="mail.php" method="post">	
										<div class="row">
											<div class="col-sm-6 col-xs-12 mb-2">
												<div class="form-group">
												  <input type="text" class="form-control" id="name" placeholder="Name*" name="Name">
												</div>
											</div>
											<div class="col-sm-6 col-xs-12 mb-2">
												<div class="form-group">
													<input type="number" class="form-control" id="phone" placeholder="Phone*" name="Phone">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12 mb-2">
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email*" name="Email">
												</div>
												
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-sm-12 mb-2">
												<div class="form-group">
													<textarea class="form-control" rows="6" id="comment" name="Subject" placeholder="Message" ></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12 mb-2">
												
													<input style="background: #b636ff;width: 100%;padding: 10px;font-weight: 600;color: white;border: 2px solid white;" type="submit" class="contact-btn" name="submit"  role="button" value="Submit">
												
											</div>
											
										</div>
										
									</form>
									
							
							
						</div>
						
						<div class=" col-md-5 col-sm-12 mb-4">
							<img src="contact.gif" class="img-fluid" alt="">
							
					</div>
					</div>
				</div>
		

		</section>
		

	
			
    


		
    </body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</html>
