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
			<h1>Exercise 8</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	This page uses <a href="https://getbootstrap.com/docs/3.3/css/">Bootstrap's</a> responsive design.
          This means our layout will adjust as the size of our viewport changes. For this exercise 
          we will take screenshots of our page in different layouts.
          <ol data-bind="foreach: {data: results, as: 'result'}" id="resultsList">
            <li class="resultItem"><span data-bind="text: result"></span></li>
          </ol>
          <button id="clearListButton" class="btn btn-secondary" data-bind="click: clearList">Clear Search</button>
		    </div>
		    <div class="col-md-8">
          <h2>Helpful Hints</h2>
          <h3>You can change the viewport.</h3>
          <div style="background: #eee">
          <pre><code>
    await page.setViewport({width: 1200, height: 800, deviceScaleFactor: 1});
          </code></pre>
          </div>
         <h3>You can zoom in by setting deviceScaleFactor higher than 1.</h3>
          <div style="background: #eee">
          <pre><code>
        await page.setViewport({width: 1200, height: 800, deviceScaleFactor: 3});
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