<?php include'db.php';



if (!empty($_POST['text']) && !empty ($_POST['user'])){
echo 'submitted';
}else{
    header("location:index.php?error=Please%20fill%20in%20the%20fields");
}
?>