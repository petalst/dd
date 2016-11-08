<?php


require __DIR__.'/vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: petter
 * Date: 08/11/2016
 * Time: 09:56
 */

/**
 * @param $array
 * @param bool $exit
 */
function dd($array, $exit = true) {

    $backtrace = debug_backtrace();

    echo PHP_EOL.PHP_EOL;
    echo 'Source: '. $backtrace[0]['file'] .' @ '. $backtrace[0]['line'];
    echo PHP_EOL;
    dump($array);
    echo PHP_EOL;
    if($exit) {
        exit;
    }
}