<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'] ?? 'N/A';
    $purok = $_POST['purok'] ?? 'N/A';
    $civil_status = $_POST['civil_status'] ?? 'N/A';
    $gender = $_POST['gender'] ?? 'N/A';
    $fullname_requester = $_POST['fullname_requester'] ?? 'N/A';
    $purpose = $_POST['purpose'] ?? 'N/A'; // Only one purpose should be selected

    // Determine pronouns based on gender
    $pronoun1 = ($gender == 'Male') ? 'he' : 'she';
    $pronoun2 = ($gender == 'Male') ? 'his' : 'her';

    // Load Word Template
    $templatePath = __DIR__ . '/brgy-clearance.docx';
    $templateProcessor = new TemplateProcessor($templatePath);

    // Replace placeholders
    $templateProcessor->setValue('fullname', $fullname);
    $templateProcessor->setValue('purok', $purok);
    $templateProcessor->setValue('civil-sta', $civil_status);
    $templateProcessor->setValue('gender', $gender);
    $templateProcessor->setValue('fullname-requester', $fullname_requester);
    $templateProcessor->setValue('pronoun1', $pronoun1);
    $templateProcessor->setValue('pronoun2', $pronoun2);

    // ✅ Purpose Handling - Check Only One
    $purposes = ['employ', 'police-clr', 'local', 'loan', 'abroad', 'others'];
    foreach ($purposes as $p) {
        $templateProcessor->setValue($p, ($purpose == $p) ? '✔' : ''); // Mark only the selected purpose
    }

    // Save the modified document
    $outputDir = __DIR__ . '/generated_certificates';
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    $fileName = 'certificate_' . time() . '.docx';
    $filePath = $outputDir . '/' . $fileName;
    $templateProcessor->saveAs($filePath);

    // Provide Download Link
    echo "✅ Certificate Generated! <a href='generated_certificates/$fileName' target='_blank'>Download Certificate</a>";

    exit;
} else {
    echo "❌ Error: No form data received!";
}
?>
