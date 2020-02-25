<?php include("function.php"); ?>

<html>

<head>
    <title>Table</title>
    <link href="table.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Daftar Anggota</h1>
        <p>Total : <?php
                    $id = 0;
                    $sql = "SELECT * FROM users";
                    $query = mysqli_query($conn, $sql);
                    echo mysqli_num_rows($query);
                    ?></p>
    </header>
    <div class="table">
        <center>
            <table cellpadding="15px">
                <thead>
                    <tr>
                        <th class="id">ID</th>
                        <th class="name">Name</th>
                        <th class="email">Email</th>
                        <th class="gender">Gender</th>
                        <th class="city">City</th>
                        <th class="status">Status</th>
                        <th class="delete">Delete</th>
                        <th class="edit">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 0;
                    $sql = "SELECT * FROM users";
                    $query = mysqli_query($conn, $sql);

                    while ($user = mysqli_fetch_array($query)) {
                        $id++;
                        echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $user['nama'] . "</td>";
                        echo "<td>" . $user['email'] . "</td>";
                        echo "<td>" . $user['gender'] . "</td>";
                        echo "<td>" . $user['city'] . "</td>";
                        echo "<td>" . $user['status'] . "</td>";
                        echo "<td><a href='delete.php?id=$user[id]'>Delete</td>";
                        echo "<td><a href='edit.php?id=$user[id]'>Edit</td>";
                        echo "</td>";
                        echo "<tr>";
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <a class="add" href="form.php">ADD</a>
        </center>
    </div>
</body>

</html>