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
			<h1>Exercise 6</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	Can we test CSS? Sure, why not? We've got a full browser at our disposal.
          In this case we have a clear list button where we have overridden the default
          on hover background-color. A button will appear below after searching and uses
          the style background-color: blue when the mouse hovers.
          <ol data-bind="foreach: {data: results, as: 'result'}" id="resultsList">
            <li class="resultItem"><span data-bind="text: result"></span></li>
          </ol>
          <button id="clearListButton" class="btn btn-secondary" data-bind="click: clearList">Clear Search</button>
		    </div>
		    <div class="col-md-8">
          <h2>Helpful Hints</h2>
          <h3>You can hover over an element.</h3>
          <div style="background: #eee">
          <pre><code>
    await page.hover('.classSelector')
          </code></pre>
          </div>
         <h3>You can get the style.</h3>
          <div style="background: #eee">
          <pre><code>
    await page.evaluate(() => {
      const button = document.querySelector('#idSelector');
      return getComputedStyle(button).getPropertyValue("css-property");
    });
          </code></pre>
          </div>
          <h3>The RGB value for blue is rgb(108, 117, 125).</h3>
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