<?php require('scripts/session.php'); ?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
		<script src='http://code.jquery.com/jquery-1.9.1.min.js' type='javascript/text'></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href='styles/main.css' rel='stylesheet' type='text/css'>
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
                <li><a href="//github.com/ruddfawcett/HabitRPG-GitHub">Downloads</a></li>
                <li class="active"><a href="#">About</a></li>
                <li><a href="myaccount.php">My Account</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
		
    <div class="page-header">
        <h1>About</h1>
    </div>
		
	<h3 class="section-header" id='setup'>Connecting Your Accounts</h3>
		<p class='lead'>To connect your GitHub to your HabitRPG account is designed to be as simple as possible.  All it requires is creating a &quot;<a href='https://help.github.com/articles/post-receive-hooks'>Service Hook</a>&quot; for the repository or repositories that you would like to connect to.  When you add your service hook, you will enter your unique URL<?php if(!array_key_exists('username',$_SESSION)) { echo "&nbsp;(to show your custom URL, please login)";}?>: <div class='well' style='margin:0;'><strong style='font-size: 17px;'>http://ruddfawcett.com/habitrpg-github/scripts/serviceHook.php?username=<?php echo $_SESSION['username'];?>&token=<?php echo $_SESSION['token']; ?></strong></div><br><p class='lead'> That's it!  Now, every time you push to your repository, your HabitRPG account will gain experience, or lose health based on the parameters!</p>
<!-- 
		    <h3 class="section-header">Parameters</h3>
		    	<p class="lead">Parameters for a service hook URL:</p>
		    	<ul>
		    		<li class='lead'><i>username</i>: your GitHub username to match with database. <strong>(required)</strong></li>
    				<li class='lead'><i>every</i>: the amount of commits it takes to trigger an XP up vote. <strong>(required)</strong></li>
    				<li class='lead'><i>direction</i>: is type of action you would like, up or down. <strong>(optional - defaults to up)</strong></li>
    			</ul>
 -->

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