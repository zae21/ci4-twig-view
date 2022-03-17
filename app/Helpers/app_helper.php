<?php

if (!function_exists('traces')) {
  function traces($var)
  {
    print '<pre>';
    print_r($var);
    print '</pre>';
    exit();
  }
}