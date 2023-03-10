<?php 
    session_start();
    include_once("./db/connect_db.php");
    $sql = "SELECT * FROM shop";
    $query = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

<head>
  <title>Miyukishop | Menu</title>
  <!-- FontAwesome 6.2.0 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- (Optional) Use CSS or JS implementation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
      integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
    body{
        font-family: "Prompt";
        background-color: #4F4F4F;
    }
    .img-promote{
    margin-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    nav{
        background-color: #F6ABFA;
        color: #fff;
    }
    .card{
        background-color: #333333;
        color: #fff;
        text-align: center;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card{
        width: 100vh;
    }
    input{
        width: 50%;
    }
</style>
<body>
  <header>
    <?php
    
        include('./asset/customernav.php')

    ?>
  </header>
  <main>
    <section class="menu-list">
    <div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
            
              <form action="topup-check.php" method="get">
                <img src="asset/truemoney.png" alt="">
                <br>
                <input type="text" name="truemoney" id="linkvc" placeholder="กรอกลิงค์อังเปา" style="
                
                border-radius: 25px;
        
                ">
                <br>
                <br>
                <button class="btn btn-success">เติมเงิน</button>
              </form>
            </div>
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