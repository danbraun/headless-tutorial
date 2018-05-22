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
			<h1>Goedemiddag Amsterdam</h1>
		  <!-- Content here -->
		  <div class="row">
        <div class="col-md-6">
          Your first challenge is to test this page. You can test by making an assertion in your test.
        </div>
        <div class="col-md-6">
          <div  style="background: #eee">
          <pre><code>
    it('should have the correct page title', async function () {
      expect(await page.title()).to.eql('Goedemiddag Amsterdam');
    });
          </code></pre>
          </div>
          Once that works try passing this configuration into the puppeteer.launch() function.
        <div  style="background: #eee">
          <pre><code>
    browser = await puppeteer.launch({headless: false});
          </code></pre>
          </div>
        </div>
      </div>
		</main>
      <script src="/js/jquery-3.2.1.slim.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
	</body>
</html>