<?php
require_once '../PHPWord-1.3.0/src/PhpWord/PhpWord.php';
require_once '../PHPWord-1.3.0/src/PhpWord/IOFactory.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? 'N/A';
    $purok = $_POST['purok'] ?? 'N/A';
    $civil_status = $_POST['civil_status'] ?? 'N/A';
    $gender = $_POST['gender'] ?? 'N/A';
    $fullname_requester = $_POST['fullname_requester'] ?? 'N/A';
    $purpose = $_POST['purpose'] ?? 'N/A';

    // Initialize PhpWord
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();

    // Add Title
    $section->addText("Barangay Certification", ['bold' => true, 'size' => 14], ['alignment' => 'center']);
    $section->addTextBreak(1);

    // Add User Data
    $section->addText("Full Name: " . $fullname);
    $section->addText("Purok: " . $purok);
    $section->addText("Civil Status: " . $civil_status);
    $section->addText("Gender: " . $gender);
    $section->addText("Requester: " . $fullname_requester);
    $section->addText("Purpose: " . $purpose);

    // ✅ FIXED: Save Word File in a Downloadable Location
    $outputDir = __DIR__ . '/generated_certificates';
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    $fileName = 'certificate_' . time() . '.docx';
    $filePath = $outputDir . '/' . $fileName;

    // Save file
    $phpWord->save($filePath, 'Word2007');

    // ✅ Provide Download Link
    echo "✅ Word file generated! <a href='generated_certificates/$fileName' target='_blank'>Download Certificate</a>";

    exit;
} else {
    echo "❌ Error: No form data received!";
}
?>
