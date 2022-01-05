<?php
/**
 * app/helpers/functions.php
 */

function redirect($page){
    header('Location: '.URLROOT. '/'.$page);
}