<?php

if (!isset($argv)) {
    fprintf(STDERR, "Must be run on command line");
    exit(1);
}

if (!isset($argv[2])) {
    fprintf(STDERR, "USAGE: %s archive_name source1 [source2...]" . PHP_EOL, $argv[0]);
    exit(2);
}

$phar = new Phar($argv[1]);
$stub = tempnam(__DIR__, '');
$handle = fopen($stub, 'w');
fwrite($handle, "<?php" . PHP_EOL);

foreach (array_slice($argv, 2) as $file) {
    $phar->addFile(__DIR__ . "/$file", $file);

    fwrite($handle, "require __DIR__ . \"/$file\";" . PHP_EOL);
}

fclose($handle);

$phar->addFile($stub, basename($stub));
$phar->setStub($phar->createDefaultStub(basename($stub)));


unlink($stub);
