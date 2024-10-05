<?php
//==================================================
// Allgemeine Funktionssammlung
//
//==================================================

/**
* Anzeigen von Meldungen im Browser.
* @param mixed $input Allgemeine Eingabe
* @param bool $die Ob Programm abgebrochen werden soll    
**/
function dd(mixed $input, bool $die=true): void
{
    echo "<div style='border:2px solid red;background:rgba(233,34,34,.3);padding:2rem;'><pre>";
    print_r($input);
    echo "</pre></div>";
    if($die)
    {
        die();
    }
}

