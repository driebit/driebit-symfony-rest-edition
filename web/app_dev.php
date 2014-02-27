<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#configuration-and-setup for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.

//    '127.0.0.1',       // localhost
//    '::1',             // localhost
//    '192.168.33.1'     // Vagrant host

$deny = true;
$allowedIps = '/(192.168.33|127.0.0.1|10.|::1)/';
if (preg_match($allowedIps, @$_SERVER['REMOTE_ADDR'])) {
  $deny = false;
}
$ips = explode(',', @$_SERVER['HTTP_X_FORWARDED_FOR']);
foreach ($ips as $ip) {
  if (preg_match($allowedIps, $ip)) {
    $deny = false;
  }
}
if ($deny) {
  header('HTTP/1.0 403 Forbidden');
  exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}


$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
