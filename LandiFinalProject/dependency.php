<?php

function loadLib($class){
    include 'lib/'. $class . '.php';
};
spl_autoload_register('loadLib');

session_start();
session_regenerate_id(true);
