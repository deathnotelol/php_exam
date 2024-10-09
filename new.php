<html>
<?php include('header.php') ?>
    <div class="new">
        <a href="index.php"><< Back</a>
    </div>
    <div class="divider"></div>
    <div>
        <form action="insertData.php" method="POST" enctype="multipart/form-data">
         <fieldset>
                <legend>
                    <h2>Student Information</h2>
                </legend>
                <div>
                    <label for="">Name</label>
                    <input type="text" name="name" id="">

                    <label for="">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password" id="">

                    <label for="">Phone Number</label>
                    <input type="text" name="phone" id="">
                </div>
                <div>
                    <label for="">Address</label>
                    <input type="text" name="address" id="">

                    <label for="">Profile Photo</label>
                    <input type="file" name="photo" id="">
                </div>

                <input type="submit" name="add" id="" value="Add Student" class="btn">
            </fieldset>
        </form>
    </div>
    <?php include('footer.php') ?>
</body>

</html>