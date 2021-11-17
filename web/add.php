<?php
    //Periksa Jika Formulir Di kirimkan, Masukan Data Formulir Ke Table Pengguna
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        //termasuk file koneksi database
        include_once("config.php");

        //masuakn data pengguna ke dalam tabel
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        //tampilkan Pesan Saat Pengguna di tambahkan
        echo "pengguna berhasil di tambahkan. <a href='index.php'>View Users</a>";
    }
?>

<html>
    <head>
        <title>Add Users</title>
    </head>

    <body>
        <a href="index.php">Go To Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </form>

        
    </body>
</html>