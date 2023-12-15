<?php
// https://blog.chrismitchellonline.com/posts/drupal-environment-variables/

$dbName=getenv("MYSQL_DATABASE");
$dbUser=getenv("MYSQL_USER");
$dbPass=getenv("MYSQL_PASSWORD");
$dbHost=getenv("MYSQL_HOST");
$dbPort=getenv("MYSQL_PORT");


$databases = array();
$config_directories = array();
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['hash_salt'] = 'ZD850J-aZXsL3pMnPUHROkg9tsxXlMh9v_ozNRStAimRZ0DmN3AWhMbjZz1wHXiazzKuJuHt-w';
$settings['entity_update_batch_size'] = 50;
$databases['default']['default'] = array (
  'database' => $dbName,
  'username' => $dbUser,
  'password' => $dbPass,
  'prefix' => '',
  'host' => $dbHost,
  'port' => $dbPort,
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['config_sync_directory'] = 'sites/default/files/config_sync';
