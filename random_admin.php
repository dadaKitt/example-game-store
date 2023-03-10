      
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark"  style="color:#fff;">
    <tr>
      <th scope="col">RandID</th>
      <th scope="col">RandKey</th>
      <th scope="col">RandName</th>
      <th scope="col">RandDetail</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody style="color:#fff;">
    <?php while($row = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?php echo $row['r_id']; ?></td>
        <td><?php echo $row['r_key']; ?></td>
        <td><?php echo $row['r_name']; ?></td>
        <td><?php echo $row['r_detail']; ?></td>
        <td><?php echo $row['category']; ?></td>
      </tr>
      <?php endwhile ?>
    <tr>
      </tbody>
    </table>
    </div>