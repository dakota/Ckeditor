<?php

use Cake\Core\Configure;

Configure::write('Wysiwyg.attachmentBrowseUrl', [
    'prefix' => 'Admin',
    'plugin' => 'Croogo/FileManager',
    'controller' => 'Attachments',
    'action' => 'browse',
    '?' => [
        'editor' => true,
    ]
]);
