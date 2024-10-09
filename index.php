<html>
<?php
include('header.php');
include('db_connect.php');

?>

<body>
    <div class="new">
        <a href="new.php">Add New +</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM student ORDER BY id DESC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $students = $stmt->fetchAll();
                $count = 1;
                foreach ($students as $student) { ?>
                <tr>
                    <td><?= $count++ ?></td>
                    <td><img src="<?= $student['profile_photo'] ?>" alt="" width="50px" height="50px"></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td><?= $student['phone_number'] ?></td>
                    <td>
                        <button class="btn"><a href="editStudent.php?id=<?= $student['id'] ?>">Edit</a></button>
                        <button class="btn"><a href="deleteStudent.php?id=<?= $student['id'] ?>" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a></button>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    <?php include('footer.php') ?>
</body>

</html>