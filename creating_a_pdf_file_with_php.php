<?php
if(!get_extension_funcs(pdf))
{
ECHO "Pdf Support not available";
die();
} 

header( "Content-type: application/pdf" );
$f = fopen("test.pdf", "w"); 

$pdf = PDF_open($f);
PDF_set_info_author($pdf, "publisher"); 

PDF_set_info_title($pdf, "Php Document"); 

PDF_set_info_creator($pdf, "constituent");
PDF_set_info_subject($pdf, "PDF Hood");
// Page width
PDF_begin_page($pdf, 595, 842);
// Font font settings
PDF_add_outline($pdf, "Item".$data[1]);
PDF_set_font($pdf, "Helvetica-Bold" , 20, winansi); 

PDF_set_text_rendering($pdf, 0);
PDF_show_xy($pdf, "Article 1",50,780);
// If there is no variable named text !!
if (!isset($yazi)) {
$yazi = "Article 2";
}
// Print text on PDF xy coordinate plane
PDF_show_xy($pdf, "$name" .$data[1], 100, 700);
PDF_end_page($pdf);
PDF_close($pdf);
fclose($f); 

header("Content-length: " . filesize("test.pdf"));
$f = fopen("test.pdf", "r");
fpassthru($f);
fclose($f);
?>
