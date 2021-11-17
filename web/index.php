<?php 
include_once("config.php");


if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($mysqli, "SELECT * FROM users WHERE name like '%".$cari."%'");
}else{
    $data = mysqli_query($mysqli, "SELECT * FROM users  ORDER BY id DESC");
}
?>  


<html>
    <head>
        <title>RUWET CRUD</title>
    </head>

    <body>
        <form action="index.php" method="get">
            <label>CARI :</label>
            <input type="text" name="cari" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''?>">
            <input type="submit" value="Cari">
        </form>

    <a href="add.php">Add New User</a><br/><br/>
        <table width='80%' border="1">
        <tr>
            <th>NAME</th> <th>MOBILE</th> <th>EMAIL</th> <th>ACTION</th>
        </tr>    

            <?php
            while($user_data = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td>", $user_data['name']."</td>";
                echo "<td>", $user_data['mobile']."</td>";
                echo "<td>", $user_data['email']."</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>EDIT2</a> | <a href='delete.php?id=$user_data[id]'>DELETE</a></td></tr>";
            }
            ?> 
        </table>
    </body>
</html>