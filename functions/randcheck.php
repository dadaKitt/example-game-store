<!-- "
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
 -->
<?php
    session_start();
    include('../db/connect_db.php');

    $sql = "SELECT * FROM rand_tb ORDER BY RAND() LIMIT 0,4";
    $query = $conn->query($sql);

    $userid = $_SESSION['UserID'];

    $sqli = "INSERT INTO history_tb (`h_id`, `h_name`, `h_detail`, `h_price`, `h_date`) VALUES () ";
    
    $_SESSION['Point'] -= 1;
    // $update = "UPDATE `user_tb` SET `userid`= `$_SESSION['UserID'] `,`username`='[value-2]',`password`='[value-3]',`user_realname`='[value-4]',`profile`='[value-5]',`approve_status`='[value-6]',`permission`='[value-7]',`point`='[value-8]' WHERE 1"
?>
		<script>
			setTimeout(function() {
			swal({
					title: "Success!", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
					text: "ระบบจะทำการส่งของให้ที่ประวัติการสั่งซื้อ", 
					type: "success", 
					timer: 2000, 
					showConfirmButton: true 
				}, function(){
					window.location.href = "../rand-valorant01.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
					});
			});
		</script>
<?php

header('location: ../rand-valorant01.php'); 

?>