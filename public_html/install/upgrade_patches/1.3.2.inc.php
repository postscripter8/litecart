<?php

  $modified_files = [
    [
      'file'    => FS_DIR_APP . 'includes/config.inc.php',
      'search'  => "// Set session lifetime in seconds" . PHP_EOL,
      'replace' => "",
    ],
    [
      'file'    => FS_DIR_APP . 'includes/config.inc.php',
      'search'  => "  ini_set('session.gc_maxlifetime', 180000);" . PHP_EOL,
      'replace' => "",
    ],
    [
      'file'    => FS_DIR_APP . 'includes/config.inc.php',
      'search'  => "// Session Platform ID" . PHP_EOL,
      'replace' => "",
    ],
    [
      'file'    => FS_DIR_APP . 'includes/config.inc.php',
      'search'  => "  define('SESSION_UNIQUE_ID', 'litecart');" . PHP_EOL,
      'replace' => "",
    ],
  ];

  foreach ($modified_files as $modification) {
    if (!file_modify($modification['file'], $modification['search'], $modification['replace'])) {
      die('<span class="error">[Error]</span></p>');
    }
  }
