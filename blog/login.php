<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Up | Blog | Gabhasti.tech</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/global/register.css">
</head>
<body>
<div class="gradients"></div>

    	
    	<form class="shadow w-450 p-3 form" 
    	      action="php/login.php" 
    	      method="post">
			  <p class="title">Register</p>
			  <p class="message">Signup now and get full access to our app.</p>
    		<?php if(isset($_GET['error'])){ ?>
				<div class="error-messages">

			  <?php echo htmlspecialchars($_GET['error']); ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))? htmlspecialchars($_GET['uname']):"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="submit">Login</button>
		<button class="submits">
		  <a href="admin-login.php" ">Admin Login</a>
		  </button> 
		  <button class="submits">
		  <a href="blog.php" class="signin">Blog</a>
			</button>  <button class="submits">
		  <a href="signup.php" class="submits">Sign Up</a>
			</button>		</form>
    </div>
</body>
</html>