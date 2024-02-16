<?php require_once "controllerUserData.php"; ?>
<?php 
if ($_SESSION["email"]) {
    header("Location: home.php");
}  
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style_form.css">
</head>
<body>
    <div class="container">
        <a class="popup_close" href="index.html">
            <img src="" alt="">
            <svg fill="currentColor" width="35px" height="35px" viewBox="0 0 32 32">
                <path d="M10.722 9.969l-0.754 0.754 5.278 5.278-5.253 5.253 0.754 0.754 5.253-5.253 5.253 5.253 0.754-0.754-5.253-5.253 5.278-5.278-0.754-0.754-5.278 5.278z"/>                
            </svg>
        </a>
        <h2 class="smart_title_h text_center">Зарегистрируйтесь</h2>
        <div class="row">
            <div class="form">
                <h2 class="smart_title_s text_center">Зарегистрируйтесь</h2>
                <form action="signup-user.php" method="POST" autocomplete="">
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="ФИО" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Электронная почта" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input id="password" class="form-control" type="password" name="password" placeholder="Пароль" required>
                        <div class="toggle_hide" onclick="showhide();"></div>
                    </div>
                    <div class="form-group">
                        <input class="button" type="submit" name="signup" value="Регистрация">
                    </div>
                    <div class="link login-link text_center">Уже зарегистрированы? <a href="login-user.php">Войти</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
    <script src="js/app.js"></script>
    <!-- SHOW HIDE PASSWORD -->
    <script>
        const toggle = document.querySelector('.toggle_hide');
        const password = document.querySelector('#password');

        function showhide(){
            if(password.type === 'password'){
                password.setAttribute('type', 'text');
                toggle.classList.add('hide');
            } 
            else {
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide');
            }
        }
    </script>
</html>