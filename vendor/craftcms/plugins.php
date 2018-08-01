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
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.1.5',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/redactor/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/redactor/archive/master.zip',
  ),
);
