<?php
//echo $_POST['user'].'<br>';
//echo $_POST['pass'].'<br>';
//echo $_POST['code_num'].'<br>';
session_start();
if(isset($_POST['code_num'])&&strlen($_POST['code_num'])>0 &&isset($_SESSION["helloweba_num"]))
{
    if($_POST['code_num']==$_SESSION["helloweba_num"])
    {
         if($_POST['user']=="admin"&&$_POST['pass']=="123456")
         {
              unset($_SESSION["helloweba_num"]);
              header("location:main.php");
              exit();
         }
    }
}
unset($_SESSION["helloweba_num"]);
header("location:1.html");
exit();
?>