<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-primary">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <img src="user.png" class="img-rounded" alt="Cinque Terre" width="30" height="30">
  <a class="navbar-brand" href="/">Arinda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="create.php">Employee <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="create.php">Create a person</a> -->
      </li>     
    </ul>

<form action="login.php" method="post" name="login_form">
    <label for="username">ชื่อผู้ใช้</label>
    <input type="text" name="username">
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password">
    <button class="btn btn-primary btn-sm" type="submit"> เข้าสู่ระบบ</button>
    </form>
  </div>
</nav>
