<?php

function redirector($location, $status, $class){
    $_SESSION['status'] = 

    "<div class='notification $class'>
        <div class='notification__icon $class'></div>
        <p class='notification__msg $class'>$status</p>
    </div>";

    header("Location: $location");
    exit;
}

?>