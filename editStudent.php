<html>
<?php
include('header.php');
include('db_connect.php');


$id = $_GET['id'];

$sql = "SELECT * FROM student where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$students = $stmt->fetch(PDO::FETCH_ASSOC);

?>

?>

<div class="new">
    <a href="index.php">
        << Back</a>
</div>
<div class="divider"></div>
<div>
    <form action="updateData.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h2>Student Information</h2>
            </legend>
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="" value="<?= $students['name'] ?>">

                <label for="">Email</label>
                <input type="email" name="email" id="" value="<?= $students['email'] ?>">
            </div>
            <div>
                <label for="">Phone Number</label>
                <input type="text" name="phone" id="" value="<?= $students['phone_number'] ?>">
            </div>
            <div>
                <label for="">Address</label>
                <input type="text" name="address" id="" value="<?= $students['address'] ?>">

                <label for="">Old Photo</label>
                <img src="<?= $students['profile_photo'] ?>" alt="" width="75px" height="75px">

                <label for="">New Photo</label>
                <input type="file" name="photo" id="">
            </div>
            <input type="hidden" name="id" value="<?= $students['id']; ?>">
            <input type="hidden" name="oldphoto" value="<?= $students['profile_photo'] ?>">

            <input type="submit" name="add" id="" value="Update Student" class="btn">
        </fieldset>
    </form>
</div>
<?php include('footer.php') ?>
</body>

</html>