<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="cetak.php" method="post">
        <h2>Form login</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="Masukkan username">

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password">

        <button type="submit">Login</button>
    </form>
</body>
</html>