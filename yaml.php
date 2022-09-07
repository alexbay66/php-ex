<?php

use Symfony\Component\Yaml\Yaml;

require __DIR__.'/vendor/autoload.php';

$config = yaml::parseFile(__DIR__.'/config.yaml');

dump($config);

$config['ip'] = '127.0.0.1';
dump($config);
$yaml = yaml::dump($config);
dump($yaml);

File_put_contents(__DIR__.'/config.yaml', $yaml);