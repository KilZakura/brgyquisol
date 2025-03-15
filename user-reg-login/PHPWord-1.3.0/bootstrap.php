<?php

// Load main PhpWord class
require_once __DIR__ . '/src/PhpWord/PhpWord.php';

// Load core settings and shared utilities
require_once __DIR__ . '/src/PhpWord/Settings.php';
require_once __DIR__ . '/src/PhpWord/Shared/Converter.php';
require_once __DIR__ . '/src/PhpWord/Shared/Drawing.php';
require_once __DIR__ . '/src/PhpWord/Shared/Text.php';
require_once __DIR__ . '/src/PhpWord/Shared/XMLReader.php';
require_once __DIR__ . '/src/PhpWord/Shared/XMLWriter.php';
require_once __DIR__ . '/src/PhpWord/Shared/OLERead.php';
require_once __DIR__ . '/src/PhpWord/Shared/ZipArchive.php';
require_once __DIR__ . '/src/PhpWord/Shared/Validate.php';

// Load all style classes
require_once __DIR__ . '/src/PhpWord/Style.php';
require_once __DIR__ . '/src/PhpWord/Style/AbstractStyle.php';
require_once __DIR__ . '/src/PhpWord/Style/Border.php';
require_once __DIR__ . '/src/PhpWord/Style/Cell.php';
require_once __DIR__ . '/src/PhpWord/Style/Font.php';
require_once __DIR__ . '/src/PhpWord/Style/Indentation.php';
require_once __DIR__ . '/src/PhpWord/Style/Line.php';
require_once __DIR__ . '/src/PhpWord/Style/Numbering.php';
require_once __DIR__ . '/src/PhpWord/Style/Paragraph.php';
require_once __DIR__ . '/src/PhpWord/Style/Section.php';
require_once __DIR__ . '/src/PhpWord/Style/Shading.php';
require_once __DIR__ . '/src/PhpWord/Style/Spacing.php';
require_once __DIR__ . '/src/PhpWord/Style/Table.php';
require_once __DIR__ . '/src/PhpWord/Style/tab.php';
require_once __DIR__ . '/src/PhpWord/Style/TOC.php';
require_once __DIR__ . '/src/PhpWord/Style/Image.php';  // ✅ ADD THIS LINE

// Load writer classes
require_once __DIR__ . '/src/PhpWord/Writer/WriterInterface.php';
require_once __DIR__ . '/src/PhpWord/Writer/AbstractWriter.php';
require_once __DIR__ . '/src/PhpWord/Writer/Word2007.php';
require_once __DIR__ . '/src/PhpWord/Writer/ODText.php';
require_once __DIR__ . '/src/PhpWord/Writer/RTF.php';
require_once __DIR__ . '/src/PhpWord/Writer/HTML.php';
require_once __DIR__ . '/src/PhpWord/Writer/PDF.php';

// Load media and converter utilities
require_once __DIR__ . '/src/PhpWord/Media.php';
require_once __DIR__ . '/src/PhpWord/IOFactory.php';

// Load templates and complex types
require_once __DIR__ . '/src/PhpWord/TemplateProcessor.php';
require_once __DIR__ . '/src/PhpWord/ComplexType/Object.php';
require_once __DIR__ . '/src/PhpWord/ComplexType/DocProps.php';

// Load PHPWord elements
require_once __DIR__ . '/src/PhpWord/Element/AbstractElement.php';
require_once __DIR__ . '/src/PhpWord/Element/CheckBox.php';
require_once __DIR__ . '/src/PhpWord/Element/Endnote.php';
require_once __DIR__ . '/src/PhpWord/Element/Footer.php';
require_once __DIR__ . '/src/PhpWord/Element/Footnote.php';
require_once __DIR__ . '/src/PhpWord/Element/Header.php';
require_once __DIR__ . '/src/PhpWord/Element/Image.php';
require_once __DIR__ . '/src/PhpWord/Element/Link.php';
require_once __DIR__ . '/src/PhpWord/Element/ListItem.php';
require_once __DIR__ . '/src/PhpWord/Element/Section.php';
require_once __DIR__ . '/src/PhpWord/Element/Table.php';
require_once __DIR__ . '/src/PhpWord/Element/Text.php';
require_once __DIR__ . '/src/PhpWord/Element/TextBreak.php';
require_once __DIR__ . '/src/PhpWord/Element/TextRun.php';
require_once __DIR__ . '/src/PhpWord/Element/Title.php';
require_once __DIR__ . '/src/PhpWord/Element/Watermark.php';

// Load reader classes
require_once __DIR__ . '/src/PhpWord/Reader/ReaderInterface.php';
require_once __DIR__ . '/src/PhpWord/Reader/AbstractReader.php';
require_once __DIR__ . '/src/PhpWord/Reader/Word2007.php';
require_once __DIR__ . '/src/PhpWord/Reader/ODText.php';
require_once __DIR__ . '/src/PhpWord/Reader/RTF.php';
require_once __DIR__ . '/src/PhpWord/Reader/HTML.php';

// Load miscellaneous utilities
require_once __DIR__ . '/src/PhpWord/Exception/Exception.php';
require_once __DIR__ . '/src/PhpWord/Exception/CopyFileException.php';
require_once __DIR__ . '/src/PhpWord/Exception/CreateTemporaryFileException.php';

?>
