<?php 
if(isset($_GET['exit']))
{
    session_destroy();
    ?> <meta http-equiv="refresh" content="0; url=<?php echo $base ?>"> <?php
    exit;
}
?>

<header class="row header">
    <div class="col" style="min-height: 60px;">
        <?php
        if ($auth_access_off == false) {
            if (isset($_SESSION['user'])) { } else {?>
            
                <a href="/auth" class="btn btn-warning" style="margin-right: 2%; float: right">Войти</a>  
                <a href="/reg" class="btn btn-warning" style="margin-right: 2%; float: right">Регистрация</a> 
            <?php }?>
            <?php
            if (isset($_SESSION['user'])) {?>
                <a href="?exit" class="btn btn-primary" style="margin-right: 2%; float: right" id="btn-logout">Выйти</a>  
                <p style="float: right; color: white; margin-right: 4%; margin-bottom: 0; font-size: 24px;"><span id="username_h"><?php echo $_SESSION['user']['username']?></span><span id="usersurname_h"><?php echo '  '.$_SESSION['user']['usersurname'];?></span></p>
                <a id="pa_h" href="personal-area/" style="float: left; color: white; margin-left: 4%; margin-bottom: 0; font-size: 24px;">Личный кабинет</a>
                <a class="d-md-none" href="personal-area/" style="float: left; color: white; margin-left: 4%; font-size: 28px;"><i  class="far fa-address-card" ></i></a>
            <?php }
        }?>
        
       
            
    </div>
</header>