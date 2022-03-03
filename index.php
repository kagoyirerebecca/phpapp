<?php include'db.php';?>
<?php 
$query='SELECT * From messages';
$message=mysqli_query($conn,$query);

if(isset($_GET['error'])){
    $error=$_GET['error'];
}
?>
<!Doctype html>
<html>
    <head>
    <title>MessageApp</title>
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body> 
        <div class="container">
            <header> 
                <h1>MessageApp</h1>
                <?php if(isset!($error)?> 
                  <div class="alert"> <?php echo $error; ?>  </div>
                <?php endif;?>
            </header>
            <div class="main">
                <form method="POST" action="process.php">
                    <input type="text"  name="text" placeholder=" Enter Message Text"> 
                    <input type="text"  name="User" placeholder=" Enter Username">
                    <input type="submit"  value="submit">
                </form>
                <hr>
                <ul class="messages">
                    <?php while($row=mysqli_fetch_assoc($message)): ?>
                    <li><?php echo $row['text']; ?> |<?php echo $row['user']; ?>  [<?php echo $row['create_date']; ?>]</li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <footer>
                MessageApp &copy; 2022
            </footer>
        </div>

    </body>
</html>