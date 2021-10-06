<?php
require_once 'bootstrap.php';
$x = new \PhpOffice\PhpWord\TemplateProcessor('coba.docx');
$x->setValue('coba', 'ganti');
$x->saveAs('x.docx')

?>