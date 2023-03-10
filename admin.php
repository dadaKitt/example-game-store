<?php 
    session_start();
    include_once("./db/connect_db.php");
    $sql = "SELECT * FROM user_tb";
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    .card-point{
        display: flex;
    align-items: center;
    justify-content: center;
    column-width: 100px;

    }
    nav{
        background-color: #F6ABFA;
        color: #fff;
    }
    
</style>
<body>
  <header>
    <?php include('asset/adminnav.php'); ?>
  </header>
  <main>
    <section class="carousel">
      
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark"  style="color:#fff;">
    <tr>
      <th scope="col">UserID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">UserRealname</th>
      <th scope="col">Profile</th>
      <th scope="col">Status</th>
      <th scope="col">Permission</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody style="color:#fff;">
    <?php while($row = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?php echo $row['userid']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['user_realname']; ?></td>
        <td><?php echo $row['profile']; ?></td>
        <td><?php echo $row['approve_status']; ?></td>
        <td><?php echo $row['permission']; ?></td>
        <td><?php echo $row['point']; ?></td>
      </tr>
      <?php endwhile ?>
    <tr>
      </tbody>
    </table>
    </div>

    <section class="card-point">
      
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