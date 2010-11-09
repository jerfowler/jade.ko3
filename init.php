<?php defined('SYSPATH') or die('No direct script access.');

/* Kohana Module Init script */

if (is_file(__DIR__.'/autoload.php')) {
  require_once __DIR__ . '/autoload.php';
} else {
  require_once __DIR__ . '/autoload.php.dist';
}