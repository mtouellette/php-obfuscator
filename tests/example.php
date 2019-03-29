<?php

require __DIR__ . '/../vendor/autoload.php';

require '../src/ObfuscatorInterface.php';
require '../src/Configuration.php';
require '../src/Obfuscator.php';

$obfuscator = new pmaslak\Obfuscator([
    'debug' => false,
    'allowed_mime_types' => ['text/x-php'],
    'obfuscation_options' => ['no-obfuscate-variable-name', 'no-obfuscate-method-name', 'no-obfuscate-class-name', 'no-obfuscate-property-name']
]);


$obfuscator->obfuscateFile('/dir/example_file.php', '/new_dir/obfuscated_file.php');
$obfuscator->obfuscateDirectory('/dir/to_obfuscate/', '/dir/obfuscated/');

