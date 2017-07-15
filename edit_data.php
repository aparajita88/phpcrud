<?php include_once('db_config.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$qry="select * from user where id=".$id;
$result=mysql_query($qry);
$fetched_row=mysql_fetch_assoc($result);
}
if(isset($_POST['btn-update'])){
$name=$_POST['name'];
$email_id=$_POST['email_id'];
$qry="update user set name='$name', email_id='$email_id' where id=".$id;
$result=mysql_query($qry);
header("Location:index.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_id" placeholder="Email" value="<?php echo $fetched_row['email_id']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html