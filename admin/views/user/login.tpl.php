<html>
    <head>
        <meta charset="utf-8" />
        <title>titi | Đăng nhập</title>
        <link href="assets/css/admin.style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="login">
            <p id="head">Đăng nhập</p>
            <form id="frmLogin" action="index.php?controller=user&action=login" method="post">
                <table class="form">
                    <tr><td><span class="login">Tên đăng nhập :</span></td><td><input type="text" name="username" value="admin" /></td></tr>
                    <tr><td><span class="login">Mật khẩu :</span></td><td><input type="password" name="password" value="admin" /></td></tr>
                    <tr><td colspan="2" align="center"><input type="submit" class="btn" name="btnLogin" value="Login" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="btn" name="btnCancel" value="Cancel" /></td></tr>
                </table>
                <p class="error">
                    <?php echo $error; ?>
                </p>
            </form>
        </div>
    </body>
</html>

