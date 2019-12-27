<?php
$databases['default']['default'] = array (
  'database' => 'test',
  'username' => 'root',
  'password' => 'srijan@123',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['twig_debug'] = TRUE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['hash_salt'] = 'M56km9ecCLELtn6mn4VXlbxz1k0LH6QfieNhQMlP4kuigmQ6eOxCpSibYAx1Z70omeFa_zPSTQ';
$config_directories['sync'] = 'sites/default/files/config_IPgLWuQvFYxS4tSAfRHatacdcZyoefFkThQAm-8O7X_4iQT1gH7qr0DgGLInyK1_LI0EiE4i6Q/sync';
