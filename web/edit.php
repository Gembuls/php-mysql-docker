<?php
//termasuk file koneksi database
include_once("config.php");

//Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu arahkan kembali ke beranda setelah pembaruan
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    //Perbarui Data Pengguna
    $result = mysqli_query($mysqli, "UPDATE users Set name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    //Arahkan ulang ke beranda untuk menampilkan pengguna yang diperbarui dalam daftar
    header("Location: index.php");
}
?>
<?php
// Tampilkan data pengguna yang dipilih berdasarkan id
// Mendapatkan Id Dari Url
$id = $_GET['id'];

// Ambil data pengguna berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name =  $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
    <head>
        <title>Edit User Data</title>
    </head>

    <body>
        <a herf="index.php">HOME</a>
        <br/><br/>

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?php echo $name;?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $email;?>></td>
                </tr>
                <tr> 
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>