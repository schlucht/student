<?php

function dd($msg, $die = true) {
    echo '<pre>';
    var_dump($msg);
    echo '</pre>';

    if ($die) {
        die();
    }
}