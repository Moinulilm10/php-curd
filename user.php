<?php
include 'share/header.php';
include 'share/form.php';
include 'share/footer.php';
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $details = $_POST['details'];

    // Check if email already exists
    $check_email_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "❌ Error: Email already exists!";
    } else {
        // ✅ Insert data if email is unique
        $sql = "INSERT INTO `users` (name, username, email, phone, password, details)
                VALUES ('$name', '$username', '$email', '$phone', '$password', '$details')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo "✅ Data inserted successfully!";
            header('location:display.php');
        } else {
            die("❌ Error inserting data: " . mysqli_error($con));
        }
    }
}

include 'share/footer.php';
