<style>
      .topnav {
    overflow: hidden;
    background-color: #1E1E1E;
  }
  .topnav-right a{
    justify-content: right;
  }
  .topnav a {
    float: left;
    display: block;
    color: #fff;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    color: whitesmoke;
  }

  .topnav a.active {
    color: white;
  }

  .topnav .icon {
    display: none;
  }

  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }

  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  }

  .sticky + .content {
    padding-top: 60px;

  }
  button{
    background-color: #1E1E1E;
  }

</style>
<div class="topnav" id="myTopnav">
    <a href="#" class="active"><i class="fa fa-home"></i>&nbsp;หน้าแรก</a>
    <a href="#"><i class='fas fa-shopping-cart'></i>&nbsp;รายละเอียดสินค้า</a>
    <a href="#"><i class='fas fa-coins'></i>&nbsp;รายละเอียดการเติมเงิน</a>
    <a href="#"><i class='fas fa-shopping-basket'></i>&nbsp;แก้ไขข้อมูลบุคคล</a>
    <!-- <a href="" disable>ยินดีต้อนรับ <i class='fas fa-user-alt'></i>&nbsp;<?php echo $_SESSION['Username']; ?></a> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
    <div class="topav-right" style="float: right;">
    <a href="#"></a>
      <a href="customernav.php" class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" ><i class='fas fa-user-alt'></i>&nbsp;<?php echo $_SESSION['Username']; ?></a>
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" style="    background-color: #1E1E1E;
      text-align:center;
">      
        <li><a style="color:#fff;">&nbsp;ข้อมูลส่วนตัว</a></li>
        <li><a disable style="color:#fff;">Points:&nbsp;<?php echo $_SESSION['Point']; ?></a></li>
      </ul>
    <a href="customernav.php"><i class='fas fa-user-alt'></i>&nbsp;โปรไฟล์</a>
      <a href="./functions/logout.php"><i class='fas fa-coins'></i>&nbsp;ออกจากระบบ</a>
    </div>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    /*! Main */
    window.onscroll = function() {stickFunction()};

    var x = document.getElementById("myTopnav");
    var sticky = myTopnav.offsetTop;

    function stickFunction() {
    if (window.pageYOffset >= sticky) {
      myTopnav.classList.add("sticky")
    } else {
      myTopnav.classList.remove("sticky");
    }
  }
</script>