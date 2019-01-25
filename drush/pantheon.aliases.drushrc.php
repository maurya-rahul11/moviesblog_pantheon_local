<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['moviesblog.dev'] = array(
    'uri' => 'dev-moviesblog.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b836e73dd78848348ee78597b5bfcbe9@dbserver.dev.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in:21020/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in',
    'remote-user' => 'dev.a9699f62-f06c-4e95-adc8-26dc51a2ffda',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['moviesblog.live'] = array(
    'uri' => 'live-moviesblog.pantheonsite.io',
    'db-url' => 'mysql://pantheon:12cb23f3b93e4bf8813dd07310c15893@dbserver.live.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in:19340/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in',
    'remote-user' => 'live.a9699f62-f06c-4e95-adc8-26dc51a2ffda',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['moviesblog.test'] = array(
    'uri' => 'test-moviesblog.pantheonsite.io',
    'db-url' => 'mysql://pantheon:78097fe14dc84ca8ab7ec4b470c1a716@dbserver.test.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in:22992/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.a9699f62-f06c-4e95-adc8-26dc51a2ffda.drush.in',
    'remote-user' => 'test.a9699f62-f06c-4e95-adc8-26dc51a2ffda',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['rahulabc.dev'] = array(
    'uri' => 'dev-rahulabc.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2164c303f39147d7b93d9bbc64ed2d71@dbserver.dev.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in:23756/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in',
    'remote-user' => 'dev.30fdad93-a98a-43af-b9c2-f65eb2ea4a58',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['rahulabc.test'] = array(
    'uri' => 'test-rahulabc.pantheonsite.io',
    'db-url' => 'mysql://pantheon:710d0322977d4deab6062e33b63b5ee5@dbserver.test.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in:20868/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in',
    'remote-user' => 'test.30fdad93-a98a-43af-b9c2-f65eb2ea4a58',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['rahulabc.live'] = array(
    'uri' => 'live-rahulabc.pantheonsite.io',
    'db-url' => 'mysql://pantheon:950078a3c514442391f9c23c88305682@dbserver.live.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in:20869/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.30fdad93-a98a-43af-b9c2-f65eb2ea4a58.drush.in',
    'remote-user' => 'live.30fdad93-a98a-43af-b9c2-f65eb2ea4a58',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
