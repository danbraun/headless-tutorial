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
		<?php include 'includes/nav.php'; ?>
		<main class="container">
			<h1>Exercise 3</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-3">
		    	So far our tests run but how do we know they are working?
          Let's add a screenshot.
		    </div>
		    <div class="col-md-2">
		      <button id="modalButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Explain Why
				</button>
		    </div>
		    <div class="col-md-7">
          <h2>Helpful Hints</h2>
          <h3>You can take a screenshot like this.</h3>
          <div style="background: #eee">
          <pre><code>
    await page.screenshot({ path: 'output/screenshot1.png', fullPage: true })
          </code></pre>
          </div>
        </div>
		  </div>

		  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Automated Browser Benefits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        	<li>Incorporate into Continous Delivery</li>
        	<li>Test real browser functions</li>
        	<li>Detect breaking</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		  
		</main>

		<script src="/js/jquery-3.2.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script>
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>
</html>