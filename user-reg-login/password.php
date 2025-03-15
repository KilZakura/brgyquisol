<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;

$phpWord = new PhpWord();
$section = $phpWord->addSection();
$section->addText("Hello, PHPWord!");

$phpWord->save('hello_world.docx');
?>