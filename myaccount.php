<?php require('scripts/session.php'); ?>
<?php require('scripts/connect.php'); ?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href='styles/main.css' rel='stylesheet' type='text/css'>
		<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		<script src='scripts/js/submission.js'></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>HabitRPG-GitHub</title>
	<head>
	<body>
    <div class="container">

      <div class="masthead">
        <h3 class="muted">HabitRPG-GitHub</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
								<li><a href="changelog.php">Changelog</a></li>
                <li><a href="//github.com/HabitRPG/HabitRPG-GitHub">Downloads</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="#">My Account</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

		<?php
			if(array_key_exists('username', $_SESSION)) {
				require('views/account.php');
			}
			else {
				require('views/login.php');
			}
		?>

      <hr>

      <div class="footer">
        <p>&copy; Rudd Fawcett 2013.  Design directly taken from <a href='http://twitter.github.com/bootstrap/examples/justified-nav.html#'>Bootstrap</a>.</p>
        <span class='pull-right' style='margin-top: -30px;'><iframe src="http://ghbtns.com/github-btn.html?user=ruddfawcett&repo=HabitRPG-GitHub&type=watch&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe><iframe src="http://ghbtns.com/github-btn.html?user=ruddfawcett&repo=HabitRPG-GitHub&type=fork&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe></span>
      </div>

    </div>
	</body>
</html>
