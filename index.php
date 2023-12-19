<?php
$title = "หน้าแรกของเว็บไซต์";
require_once "layout/header.php";
require_once "db/connect.php";
$result = $controller->getTables();
?>
<h1 class="text-center"><?php echo "แสดงข้อมูล login INNER JOIN member"; ?></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["lname"]; ?></td>
        <td>
          <a onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')" href="delete.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-danger">ลบข้อมูล</a>

          <a href="editForm.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-warning">แก้ไขข้อมูล</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>

</html>