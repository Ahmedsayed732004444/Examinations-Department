<?php
$xml = file_get_contents('extracted_docx/word/document.xml');
// Extract all text inside <w:t> tags
preg_match_all('/<w:t[^>]*>(.*?)<\/w:t>/i', $xml, $matches);
$text = implode('', $matches[1]);
// But wait, <w:p> indicates paragraphs. Let's do it better.
$xml = str_replace('<w:p ', "\n<w:p ", $xml);
$xml = str_replace('<w:p>', "\n<w:p>", $xml);
$xml = strip_tags($xml);
file_put_contents('extracted_docx_text.txt', $xml);
echo "Text extracted to extracted_docx_text.txt\n";
