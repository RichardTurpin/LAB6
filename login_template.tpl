<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background="fundo.jpg">
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SPORTS FORUM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{$href1}">{$MENU_1}</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{$href0}">{$MENU_2}</a></li>
        <li><a href="{$href2}"><span class="glyphicon glyphicon-log-in"></span> {$MENU_3}</a></li>
      </ul>
    </div>
  </div>
</nav>
{if isset($Msg)}
<div class="container" style="padding-top: 5%">
    <div class="container-fluid text-center" style="background-color: #ff0000;border-radius:5px">
            <h2 style="color: white;">{$Msg}</h2>
    </div>
</div>
{/if}
<div class="container">
  <h2 style="color: #ffffff">Login</h2>
  <form action="login_action.php" method="POST">
    <div class="form-group">
      <label for="usr" style="color: #ffffff">Email:</label>
      <input type="text" class="form-control" name="email" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: #ffffff">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd">
    </div>
    <button type="submit" style="margin-left: 45%" class="btn">Sign in</button>
  </form>
</div>

</body>
</html>
