<?php

//function die_dump()
function urlCheck($value){
    return $_SERVER["REQUEST_URI"] === $value;
}