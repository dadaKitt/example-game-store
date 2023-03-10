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
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	</head>
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
    .container{
        border-radius: 25px;
        background: linear-gradient(to right, #000000 0%, #333333 100%);
        color: #fff;
        text-align: center;
    }
    
</style>
<body>
  <header>
    <?php
    
        include('./asset/customernav.php')

    ?>
  </header>
  <main>
    <br>
    <section style="        border-radius: 25px;">
        <div class="container">
            <form action="functions/randcheck.php">
                <img src="asset/สุ่มรหัสValorant.png" alt="" width="25%" style="border-radius: 25px;">
                <h4 class="card-title">สุ่มไอดีValorant 1</h4>
                <h6 class="card-subtitle text-muted">สุ่มรหัสValorant สกิน 0-10 อัน</h6>
                <p class="card-text p-y-1">✅รหัสอาจจะมีคนเข้าเล่นได้ตลอดเวลา</p>
                <p class="card-text p-y-1">✅มีปัญหาแค่ไอดีโดนแบนไอดีเข้าไม่ได้ภายใน 10 นาทีเคลมได้</p>
                <p class="card-text p-y-1">❎เปลี่ยนไอดี-รหัสไม่ได้</p>
                <p class="card-text p-y-1"><i class='far fa-money-bill-alt'></i>&nbsp;ยอดเงินคงเหลือ <?php echo $_SESSION['Point'];?></p>
                <p class="card-text p-y-1">💰1บาท</p>
                <input type="text" name="userid" disabled placeholder="<?php echo $_SESSION['UserID'];?>" hidden>
                <button class="btn btn-danger" width="100%">เริ่มการสุ่ม</button>
            </form>
        </div>
    </section>
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