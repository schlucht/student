<?php

namespace Ots\Base;

class F {
static function dd($msg, $die = true) {
    echo '<pre style="width: 100%; border: solid 3px red" padding-left: 3rem;>';
        var_dump($msg);
    echo '</pre>';

    if ($die) {
        die();
    }
}
}