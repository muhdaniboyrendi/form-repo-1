<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('New user has registered!');
                  </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
</head>

<body>
    <div class="signupbox">
        <div class="header">
            <h2>Signup</h2>
        </div>
        <form action="" method="POST">
            <div class="user">
                <!-- input text -->
                <div class="top">
                    <label>Name </label><br>
                    <input name="nama" id="nama" type="text" required>
                    <br><br>
                    <label>Email </label><br>
                    <input name="email" id="email" type="email" required>
                </div>
                <!-- end input text -->
                <br>
                <!-- gender -->
                <div class="gender">
                    <p>Gender </p>
                    <input name="gender" id="gender" type="radio" value="Male" required>
                    <label>Male</label>
                    <input name="gender" id="gender" type="radio" value="Female" required>
                    <label>Female</label>
                </div>
                <!-- end gender -->
                <br>
                <!-- city -->
                <div class="bottom">
                    <p>City </p>
                    <select name="city" id="city">
                        <option value="Solo">Solo</option>
                        <option value="Karanganyar">Karanganyar</option>
                        <option value="Sukoharjo">Sukoharjo</option>
                        <option value="Sragen">Sragen</option>
                    </select>
                </div>
                <!-- end city -->
                <br>
                <!-- status -->
                <div class="status">
                    <p>Status</p>
                    <input type="checkbox" name="status" id="status" value="Pelajar">
                    <label>Pelajar</label>
                    <input type="checkbox" name="status" id="status" Value="Kerja">
                    <label>Kerja</label>
                    <input type="checkbox" name="status" id="status" value="Kuliah">
                    <label>Kuliah</label>
                </div>
                <!-- end status -->
                <br>
            </div>
            <!-- submit -->
            <div class="sub">
                <input type="submit" name="submit" value="Submit" />
            </div>
            <!-- end submit -->
        </form>
    </div>
</body>

</html>