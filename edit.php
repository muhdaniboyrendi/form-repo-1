<?php
    require 'function.php';

    if(isset($_POST["edit"])){
       $id = $_POST['id'];
       $nama = $_POST['nama'];
       $email = $_POST['email'];
       $gender = $_POST['gender'];
       $city = $_POST['city'];
       $status = $_POST['status'];

       $result = mysqli_query($conn, "UPDATE users SET nama='$nama', email='$email', gender='$gender', city='$city', status='$status' WHERE id='$id'");
       header('Location: table.php?success');
    }
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT FROM users WHERE id='$id'");

    while ($user_data = mysqli_fetch_array($result)) {
        $nama = $user_data['nama'];
        $nama = $user_data['nama'];
        $email = $user_data['email'];
        $gender = $user_data['gender'];
        $city = $user_data['city'];
        $status = $user_data['status'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Muhdani B.E.A. | Registration</title>
        <link href="edit.css" rel="stylesheet">
    </head>
    <body>
        <div class="box">
            <div class="header">
                <h2>Edit</h2>
            </div>
            <form action = "" method="POST">
                <div class = "user">
                    <!-- input text -->
                    <div class="top">
                        <label>Name </label><br>
                        <input name="nama" id="nama" type="text" value="<?php echo $nama; ?>" required>
                        <br><br>
                        <label>Email </label><br>
                        <input name="email" id="email" type="email" value="<?php echo $email; ?>" required>
                    </div>
                    <!-- end input text -->
                    <br>
                    <!-- gender -->
                    <div class="gender">
                        <p>Gender </p>
                        <input name="gender" id="gender" type="radio" value="Male" <?php if($gender == 'Male'){echo "checked";}; ?> required>
                        <label>Male</label>
                        <input name="gender" id="gender" type="radio" value="Female" <?php if($gender == 'Female'){echo "checked";}; ?> required>
                        <label>Female</label>
                    </div>
                    <!-- end gender -->
                    <br>
                    <!-- city -->
                    <div class="bottom">
                        <p>City </p>
                        <select name="city" id="city">
                            <option value=""></option>
                            <option value="Solo"><?php if($city == 'Solo'){echo "selected";}; ?></option>
                            <option value="Karanganyar"><?php if($city == 'karanganyar'){echo "seleceted";}; ?></option>
                            <option value="Sukoharjo"><?php if($city == 'Sukoharjo'){echo "seleceted";}; ?></option>
                            <option value="Sragen"><?php if($city == 'Sragen'){echo "selected";}; ?></option>
                        </select>
                    </div>
                    <!-- end city -->
                    <br>
                    <!-- status -->
                    <div class="status">
                        <p>Status</p>
                        <input type="checkbox" name="status" id="status" value="Pelajar" <?php if($status == 'Pelajar'){echo "checked";}; ?>>
                        <label>Pelajar</label>
                        <input type="checkbox" name="status" id="status" Value="Kerja" <?php if($status == 'Kerja'){echo "checked";}; ?>>
                        <label>Kerja</label>
                        <input type="checkbox" name="status" id="status" value="Kuliah" <?php if($status == 'Kuliah'){echo "checked";}; ?>>
                        <label>Kuliah</label>
                    </div>
                    <!-- end status -->
                    <br>
                </div>
                <!-- submit -->
                <div class = "sub">
                    <input type="submit" name="edit" value="Save" />
                </div>
                <div class="link">
                    <a href="table.php">Show Table</a>
                </div>
                <!-- end submit -->
            </form>
        </div>
    </body>
</html>