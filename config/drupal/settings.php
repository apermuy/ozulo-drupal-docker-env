<?php
// https://blog.chrismitchellonline.com/posts/drupal-environment-variables/
$dbName=getenv("MYSQL_DATABASE");
$dbUser=getenv("MYSQL_USER");
$dbPass=getenv("MYSQL_PASSWORD");


$databases = array();
$config_directories = array();
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$databases['default']['default'] = array (
  'database' => $dbName,
  'username' => $dbUser,
  'password' => $dbPass,
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['config_sync_directory'] = 'sites/default/files/config_sync';
