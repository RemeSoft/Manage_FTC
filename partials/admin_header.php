<?php
    if(isset($_POST['logout'])){
        echo "logout Clicked";
        session_destroy();
        header('Location: login.php');
        exit;
    }
?>
<div class="right__header">
    <?php
        if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            unset($_SESSION['status']);
        }else{
            echo "<p class='assistant'></p>";
        }
    ?>
    <div class="right:header__option">
        <a href="./admin_update.php" class="option__button user">Admin &nbsp;&nbsp;<i class="fa-solid fa-user"></i></a>
        <form method="POST">
            <button class="option__button logout" name="logout">Logout &nbsp;&nbsp;<i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        </form>  
    </div>
</div>