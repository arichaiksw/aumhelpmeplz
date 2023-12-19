<?php
$title = "เพิ่มข้อมูล";
require_once "layout/header.php";
require_once "db/connect.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $status = $controller->Insert($username, $password, $fname, $lname);
    if ($status) {
        echo "yessssssssssssssssssssssssssssssssssssss";
        // header("Location:index.php");
    } else {
        echo "nooooooooooooooooooooooooooooooooooooooo";
    }
}
?>

<h1 class="text-center"><?php echo "เพิ่มข้อมูล"; ?></h1>
<form method="POST" action="addForm.php">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="fname">ชื่อ</label>
        <input type="text" name="fname" class="form-control">
    </div>
    <div class="form-group">
        <label for="lname">นามสกุล</label>
        <input type="text" name="lname" class="form-control">
    </div>


    <input type="submit" name="submit" value="บันทึก" class="btn btn-primary my-3">
</form>

</div>
</body>

</html>