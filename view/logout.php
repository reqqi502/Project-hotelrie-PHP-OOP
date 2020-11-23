<?php
session_start();
if(empty($_SESSION['user'])){
    header("location:index.php");
}
echo "welcome " .$_SESSION['user'] ." to your page!";
?>
<?php
if(isset($_POST['sub'])){
session_start();
session_unset();
session_destroy();
header("location:index.php");
}
?>

<form action="" method="POST">
<button type="submit" name="sub" style="float:right;margin-right:40px">submit</button>
</form>