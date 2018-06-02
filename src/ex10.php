<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Demo of Headless Chrome">
    <meta name="author" content="Derek Binkley">
	<!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/mystyle.css" rel="stylesheet">

    <title>Goedemiddag Amsterdam</title>
	</head>
	<body>
		<?php include 'includes/nav2.php'; ?>
		<main class="container">
			<h1>Exercise 10</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	This page let's you login and see your account.
          <?php if (!empty($_GET['message'])) {
            echo '<div id="user-message" class="alert alert-warning" role="alert">';
            echo $_GET['message'];
            echo '</div>';
          }
          ?>
          <form method="post" action="/ex10-login.php">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>

          <button type="submit" class="btn btn-primary" id="login">Login</button>
        </form>
		    </div>
		    <div class="col-md-8">
          <h2>Helpful Hints</h2>
          <h3>You can wait for page load after submitting a form</h3>
          <div style="background: #eee">
          <pre><code>
  await page.waitForNavigation({waitUntil: 'load'});
          </code></pre>
          </div>
         <h3>You can check the URL of your current page.</h3>
          <div style="background: #eee">
          <pre><code>
  page.url()
          </code></pre>
          </div>
        </div>
		  </div>
		</main>

		<script src="/js/jquery-3.2.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='/js/knockout-3.4.2.js'></script>
    <script type='text/javascript' src='/js/headless.js'></script>
	</body>
</html>