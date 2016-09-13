<?php 

$webserver_root = dirname(dirname(__FILE__));
if (IS_WINDOWS) {
 //convert windows path separators
 $webserver_root = str_replace("\\","/",$webserver_root); 
}
// Auto collect the relative html path, i.e. what you would type into the web
// browser after the server address to get to SAC.
$web_root = substr($webserver_root, strlen($_SERVER['DOCUMENT_ROOT']));
// Ensure web_root starts with a path separator
if (preg_match("/^[^\/]/",$web_root)) {
 $web_root = "/".$web_root;
}
// The webserver_root and web_root are now automatically collected in
//  real time per above code. If above is not working, can uncomment and
//  set manually here:
//   $webserver_root = "/var/www/openemr";
//   $web_root =  "/openemr";
//


$_SESSION['WEB_ROOT']= $webserver_root;
// This is the directory that contains site-specific data.  Change this
// only if you have some reason to.
$GLOBALS['OE_SITES_BASE'] = "$webserver_root/sites";
$GLOBALS['webroot'] = $web_root;

?>