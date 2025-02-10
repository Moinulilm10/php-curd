<?php
include 'share/header.php';
include 'connect.php';
?>

<div class="mb-3">
    <span id="selectedCount">Selected: 0</span>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">
                <input class="form-check-input" type="checkbox" id="selectAll">
            </th>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
        ?>
                <tr>
                    <td>
                        <input class="form-check-input checkboxItem" type="checkbox" value="<?= $id ?>">
                    </td>
                    <th scope="row"><?= $id ?></th>
                    <td><?= $username ?></td>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $phone ?></td>
                    <td>
                        <a href="delete.php?id=<?= $id ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                            Delete
                        </a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>