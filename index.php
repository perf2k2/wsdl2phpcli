<?php

$currentDir = __DIR__;
$url = $argv[1];
$onlyClasses = $argv[2];

require "$currentDir/vendor/autoload.php";

if (preg_match("/^(http|https):\/\/([^?]+)?/", $url, $matches) !== 1) {
    throw new RuntimeException('Unable to parse url');
}

$fileName = str_replace('/', '.', $matches[2]);
$sourceDir = "$currentDir/source/";
$newSourceFileName = $sourceDir . $fileName;

copy($url, $newSourceFileName);

$params = [
    'inputFile' => $newSourceFileName,
    'outputDir' => "$currentDir/output/$fileName",
];

if (!empty($onlyClasses)) {
    $params['classNames'] = $onlyClasses;
}

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(new \Wsdl2PhpGenerator\Config($params));