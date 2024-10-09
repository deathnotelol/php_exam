<?php

include("db_connect.php");
function deleteStudent($id) {
    global $conn;
    
    $sql = "DELETE FROM student WHERE id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        echo "<script>
            alert('Student record deleted successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: Unable to delete the student record.');
            window.location.href = 'index.php';
        </script>";
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteStudent($id);
} else {
    header("Location: index.php");
    exit();
}
