<?php 

    include_once("./db/connect_db.php");

?>

<!doctype html>
<html lang="en">

<head>
  <title>Welcone To MiyukiShop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
*{
  padding: 0;
    margin: 0;
  box-sizing: 0;
}

body{
    font-family: 'Prompt';
}
.container{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
input{
  border: 1px solid grey;
  border-radius: 10px;
  margin: auto;
  padding: 10px;
  display: flex;
  max-width: 25rem;
}

</style>
<body>
<main>
<div class="center">
  <div class="container">
        <form action="./functions/checkin.php" method="get" class="loginform">
            <h1 align="center">MiyukiShop</h1>
            <input type="text" name="username" id="username" placeholder="Username"><br>
            <input type="password" name="password" id="password" placeholder="Password"><br>
            <button class="btn btn-primary">เข้าสู่ระบบ</button><br>
            <span>ยังไม่เป็นสมาชิก</span><a href="" >สมัครสมาชิก</a>
          </form>
  </div>
</div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>