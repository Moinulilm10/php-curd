<?php
include 'connect.php';
include 'share/header.php';

$id = $_GET['update_id'];
$sql  = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$username = $row['username'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];
$details = $row['details'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $details = $_POST['details'];

    $sql = "UPDATE users SET username = '$username', name = '$name', email = '$email', phone = '$phone', password = '$password', details = '$details' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<div class="container">
    <form class="mt-5 col d-flex flex-column gap-3" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Username</label>
            <input type="text" class="form-control" id="exampleInputName1" name="username" placeholder="Enter Your Username" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputFullName">Full Name</label>
            <input type="text" class="form-control" id="exampleInputFullName" name="name" placeholder="Enter Your Full Name" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" value="<?php echo $phone; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Details About Yourself</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="details" rows="3" placeholder="Enter Your Details"><?php echo $details; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
    </form>
</div>