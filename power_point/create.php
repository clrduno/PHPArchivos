<?php

require_once './vendor/autoload.php';

use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Shape\RichText;

$objPHPPresentation = new PhpPresentation();
$currentSlide = $objPHPPresentation->getActiveSlide();

$shape = $currentSlide
			->createRichTextShape()
			->setWidth(600)
			->setOffsetX(170)
			->setOffsetY(50);


$textRun = $shape->createTextRun('PHP File Handling Course');

$shape = $currentSlide->createDrawingShape();
$shape->setPath('./attractions.jpg')
	->setHeight(300)
	->setOffsetX(100)
	->setOffsetY(100);

$textRun
	->getFont()
	->setBold(true)
	->setSize(18);

$write = IOFactory::createWriter($objPHPPresentation, 'PowerPoint2007');

header('Content-Disposition: attachment; filename= export.pptx');

$write->save('php://output');

?>