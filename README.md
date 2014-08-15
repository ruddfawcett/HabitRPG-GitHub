#[HabitRPG-GitHub](https://ruddfawcett.com/habitrpg-github)

Connect and sync your HabitRPG and GitHub accounts.  Built on Rudd fawcett's
[HabitRPG_PHP API class](https://github.com/ruddfawcett/HabitRPG_PHP) as well as
[Bootstrap](http://getbootstrap.com) and a little jQuery).

##Purpose:

If you love playing HabitRPG, and love using GitHub too, why not sync them?  ***For every x number of
commits you push to a repository, you will get x number of upvotes* on your HabitRPG account!***  This
way, your hard work coding pays off with your HabitRPG account.  

*<i>Both of the "x" values are configurable in when you add a repository to your account.</i>`

##How to run locally:

###MySQL:

The process above is fairly straight forward, and all you know have to do to be able to interact with
the database is to copy `scripts/connect_example.php` to `scripts/connect.php` and set your host
values in `scripts/connect.php`. Don't worry, it's in the `.gitignore` file so you won't accidentally
upload your credentials.

**Table Structure, users:**
<table>
  <th>username</th>
  <th>realName</th>
  <th>password</th>
  <th>userId</th>
  <th>apiToken</th>
  <th>alerts</th>
  <th>token</th>
  <tr>
    <td>user's username</td>
    <td>github user's real name</td>
    <td>sha256 with salt "habitrpg"</td>
    <td>habitrpg userid</td>
    <td>habitrpg apitoken</td>
    <td>not used.  future alerts to be stored in alerts table</td>
    <td>unique token for user's</td>
  </tr>
</table>

**Table Structure, userInfo:**
<table>
  <th>forUser</th>
  <th>repoName</th>
  <th>forEvery</th>
  <th>current</th>
  <th>direction</th>
  <th>totalHabit</th>
  <th>totalCommits</th>
  <th>id</th>
  <tr>
    <td>username of user with repo</td>
    <td>repository name of github repo</td>
    <td>number of commits per vote</td>
    <td>current number of commits til next vote</td>
    <td>direction of vote: up/down</td>
    <td>total amount of habit votes cast</td>
    <td>total amount of commits pushed to the repo</td>
    <td>unique id for repo</td>
  </tr>
</table>

Just to double check, your `scripts/connect.php` script should look like this after you have entered the
values:

```php
<?php
  $hostname = "{Path to MySQL database}";
  $username = "{MySQL database username, most default to root";
  $password = "{MySQL database password, most default to no password}";
  $dbname = "{Name of the database you imported the SQL into, I use HabitRPGGitHub}";

  $db= new PDO("mysql:host=".$hostname.";dbname=".$dbname.";charset=utf8", $username, $password);
?>
```

Run `scripts/setup.php` in a browser or on the command line. Alternatively, you can
use the SQL file located in `mysql/import.sql` to clone the database structure into a MySQL database
service such as [SQLBuddy](http://sqlbuddy.com/) or [phpMyAdmin](http://www.phpmyadmin.net/home_page/).  
**Don't forget to start MySQL on your localhost, though!**

###PHP:

Start your PHP server on your computer, and then navigate to localhost/habitrpg-github, and you should
arrive at the home screen if you have set it up properly.  Any `PDO` errors are a result from improperly
setting up the database!  Be sure you have done that first!
