<!doctype html>
<html lang="en">
    <head>
		 <?php
        include('include/head.php');
        ?>
    </head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
		   <?php
                include('include/header_menu.php');
                ?>
  </header>

       <div data-role="page">
        <div data-role="Header">
        <h1>Welcome to my page</h1>
        </div>
        <div data-role="main" class="ui_content">
        <form method="post" action="index.php">
        <div>
        <h3>login Information</h3>
        <label for="usrnm" class="ui-hidden-accessible">Username:</label><br />
        <input type="text" name="user" id="usrnm" placeholder="Username" /><br />
        <label for="pswd" class="ui-hidden-accessible">Password:</label><br />
        <input type="text" name="passw" id="passw" placeholder="Password" /><br />
        <label for="log">Keep me logged in</label><br />
        <input type="checkbox" name="login" id="log" value="1" data-mini="true" /><br />
        <input type="submit" data-inline="true" value="Log in" /><br />
        </div>
        </form>
        </div>
        </div>
        </div>
</body>
</html>