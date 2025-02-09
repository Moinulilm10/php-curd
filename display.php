<?php
include 'share/header.php';
include 'connect.php';
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">action button</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * from users";
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
                    <th scope="row"><?= $id ?></th>
                    <td><?= $username ?></td>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $phone ?></td>
                    <td>
                        <!-- Action buttons, e.g., Edit or Delete -->
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>