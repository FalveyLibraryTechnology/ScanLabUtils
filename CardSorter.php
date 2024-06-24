<?php

$month = readline("Month: ");
$number = readline("Starting Number: ");
$dir = str_replace("\\", "/", readline("Folder: "));

$files = glob("$dir/*.[tT][iI][fF]*");

for ($i = 0; $i < count($files); $i += 2) {
    $targetDir = $dir . "/" . $month . str_pad($number + $i / 2, 3, "0", STR_PAD_LEFT);
    mkdir($targetDir);
    rename($files[$i], $targetDir . "/" . basename($files[$i]));
    if (isset($files[$i + 1])) {
        rename($files[$i + 1], $targetDir . "/" . basename($files[$i + 1]));
    }
}
