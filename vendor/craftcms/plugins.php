<?php

$vendorDir = dirname(__DIR__);

return array (
  'doublesecretagency/craft-bootstrap' => 
  array (
    'class' => 'doublesecretagency\\bootstrap\\Bootstrap',
    'basePath' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    'handle' => 'bootstrap',
    'aliases' => 
    array (
      '@doublesecretagency/bootstrap' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    ),
    'name' => 'Bootstrap',
    'version' => '4.1.1.2',
    'schemaVersion' => '0.0.0',
    'description' => 'Build your site with the Bootstrap front-end framework.',
    'developer' => 'Double Secret Agency',
    'developerUrl' => 'https://www.doublesecretagency.com/plugins',
    'documentationUrl' => 'https://github.com/doublesecretagency/craft-bootstrap/blob/v4/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/doublesecretagency/craft-bootstrap/v4/CHANGELOG.md',
  ),
);
