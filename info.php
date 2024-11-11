<?php
session_start();

print "<h2>\$_SESSION</h2><br><pre>";
print_r($_SESSION);
print "</pre><h2>\$_REQUEST</h2><pre>";
print_r($_REQUEST);

print "</pre><h2>\$_FILES</h2><pre>";
print_r($_FILES);
print "</pre>";

phpinfo();
