
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<!-- Custom Theme files -->
<link href="scss.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Forgot Password</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form id="form" action="phpforgot_password.php" method="post">
					<input class="text email" type="email" name="email" id="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" id="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" name="cp" value="CHANGE PASSWORD">
				</form>
				<p>Now You Log In Again! <a href="http://localhost/project/p/sign/log.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2019 Raptors Recover Password Form. All rights reserved | Design by <a href="">Raptors</a></p>
		</div>

	<script>
		$("#form").validate({
			rules: {
				email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 12
                },
                cpassword: {
       				required: true,
                    equalTo: "#password"
                }
			}
		});
	</script>

</body>
</html>