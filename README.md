#[HabitRPG-GitHub](https://ruddfawcett.com/habitrpg-github)
========
Connect and sync your HabitRPG and GitHub accounts.  Built on my [HabitRPG_PHP API class](https://github.com/ruddfawcett/HabitRPG_PHP) as well as [Bootstrap](http://getbootstrap.com) and a little [jQuery](http://nodejs.org/).

##Purpose:

If you love playing HabitRPG, and love using GitHub too, why not sync them?  **For every x number of commits you push to a repository, you will get x number of upvotes* on your HabitRPG account!**  This way, your hard work coding pays off with your HabitRPG account.  

*<i>Both of the "x" values are configurable in when you add a repository to your account.</i>

##File Structure:

 * `index.php`
 * `about.php`
 * `changelog.php`
 * `myaccount.php`
 * `README.md`
 * **mysql**
  * `import.sql`
 * **scripts**
  * **js**
    * `submission.js`
    * `HabitRPG_PHP.ph`
    * `connect.php`
    * `logout.php`
    * `process.php`
    * `serviceFunctions.php`
    * `serviceHook.php`
    * `session.php`
 * **styles**
  * `main.css`
 * **views**
  * `account.php`
  * `login.php`

##How to run locally:

###MySQL:

Use the SQL file located in `mysql/import.sql` to clone the database structure into a MySQL database service such as [SQLBuddy](http://sqlbuddy.com/) or [phpMyAdmin](http://www.phpmyadmin.net/home_page/).  **Don't forget to start MySQL on your localhost, though!**

The process above is fairly straight forward, and all you know have to do to be able to interact with the database is to set your host values in `scripts/connect.php`.

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

###PHP:

Start your PHP server on your computer, and then navigate to localhost/habitrpg-github, and you should arrive at the home screen if you have set it up properly.  Any `PDO` errors are a result from inproperly setting up the database!  Be sure you have done that first!


###Double check:
Just to double check, your `scripts/connect.php` script should look like this after you have entered the values:

```php
<?php
  $hostname = "{Path to MySQL database}";
  $username = "{MySQL database username, most default to root";
  $password = "{MySQL database password, most default to no password}";
  $dbname = "{Name of the database you imported the SQL into, I use HabitRPGGitHub}";      
      
  //Starts new PDO instance - mysql_query_* is going to be depracated, so whole site is built on PDO...
  $db= new PDO("mysql:host=".$hostname.";dbname=".$dbname.";charset=utf8", $username, $password);
?>
```

##Screenshot:

###View current stats for your GitHub repositories, including how many past commits you've pushed, as well as how many votes HabitRPG-GitHub has executed for you:

![Screenshot](http://oi45.tinypic.com/14c9oq9.jpg)
