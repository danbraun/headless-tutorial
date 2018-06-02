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
			<h1>Exercise 9</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	This page uses <a href="https://getbootstrap.com/docs/3.3/css/">Bootstrap's</a> responsive design.
          This means our layout will adjust as the size of our viewport changes. We detected
          that your user agent is <span id='user-agent'><?= $_SERVER['HTTP_USER_AGENT'] ?></span>.
          <ol data-bind="foreach: {data: results, as: 'result'}" id="resultsList">
            <li class="resultItem"><span data-bind="text: result"></span></li>
          </ol>
          <button id="clearListButton" class="btn btn-secondary" data-bind="click: clearList">Clear Search</button>
		    </div>
		    <div class="col-md-8">
          <h2>Helpful Hints</h2>
          <h3>You can emulate any device listed in <a href="https://github.com/GoogleChrome/puppeteer/blob/eb1826bc4972d527bed2a0f5f4e351df330114cd/DeviceDescriptors.js" target="_blank">deviceDescriptors.js</a>.</h3>
          <div style="background: #eee">
          <pre><code>
  const devices = require('puppeteer/DeviceDescriptors');
  ...
  page.emulate(devices['iPhone X']);
          </code></pre>
          </div>
         <h3>You can check the content of the user-agent span in this page like this.</h3>
          <div style="background: #eee">
          <pre><code>
  const userAgent = await page.evaluate(() => document.querySelector('#user-agent').innerText);
  expect(userAgent).to.contains('iPhone');
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