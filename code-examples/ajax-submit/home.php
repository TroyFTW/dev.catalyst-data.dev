<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AJAX Form Example</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://www.attheco.com/devcatalyst/">Dev Catalyst</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li class="dropdown">
				    	<a class="dropdown-toggle"
				       data-toggle="dropdown"
				       href="#">
				        Our Examples
				        <b class="caret"></b>
				      </a>
					    <ul class="dropdown-menu">
					      <li><a target="_blank" href="#">Hello World</a></li>
					      <li><a target="_blank" href="#">Connect to Database</a></li>
					      <li><a target="_blank" href="#">Insert into Table</a></li>
					      <li class="active"><a target="_blank" href="/">Ajax Form</a></li>
					    </ul>
					  </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a target="_blank" href="https://www.w3schools.com/sql/">SQL Tuts</a></li>
            <li><a target="_blank" href="https://www.w3schools.com/php/">PHP Tuts</a></li>
            <li><a target="_blank" href="https://www.w3schools.com/jquery/">jQuery Tuts</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav> 

<div class="wrapper">
	<div class="container">
		<div class="page-header">
			<h1>Simple PHP Submit Form with AJAX
			</h1>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div id="form-content">
				
					<!-- UPDATE FORM -->
					<form method="post" id="submit-form" autocomplete="off">

						<!-- BASIC FIELD CONSTRUCT -->
						<div class="form-group">
							<input type="text" class="form-control" name="txt_#" id="#" placeholder="#" required />
						</div>
						<!-- END FIELD CONSTRUCT -->
						
						<hr />
						
						<div class="form-group">
							<button class="btn btn-primary">Submit</button>
						</div>		
					</form>
	        <!-- END OF FORM UPDATE -->  
					
	      </div>
	    </div>
		</div>
	</div>
</div>

<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">

		$(document).ready(function() {	
			
			// submit form using $.ajax() method
			$('#submit-form').submit(function(e){
					e.preventDefault(); // Prevent Default Submission			
					$.ajax({
						url: 'submit.php',
						type: 'POST',
						data: $(this).serialize() // it will serialize the form data (grabs all fields in a form)
					})
					.done(function(data){
						$('#form-content').fadeOut('slow', function(){
							$('#form-content').fadeIn('slow').html(data);
						});
					})
					.fail(function(){
						alert('Form Submission Failed ...');	
					});
			});
			
			
			/*
			// submit form using ajax short hand $.post() method			
			$('#submit-form').submit(function(e){
				e.preventDefault(); // Prevent Default Submission
				$.post('submit.php', $(this).serialize() )   //different line (shorthand)
				.done(function(data){
					$('#form-content').fadeOut('slow', function(){
						$('#form-content').fadeIn('slow').html(data);
					});
				})
				.fail(function(){
					alert('Form Submission Failed ...');
				});	
			});
			*/
			
		});
</script>
</body>
</html>