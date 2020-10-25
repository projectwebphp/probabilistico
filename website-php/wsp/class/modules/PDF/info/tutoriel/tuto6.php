<?php
/**
 * PHP file wsp\class\modules\PDF\info\tutoriel\tuto6.php
 */
/**
 * Class 
 *
 * WebSite-PHP : PHP Framework 100% object (http://www.website-php.com)
 * Copyright (c) 2009-2020 WebSite-PHP.com
 * PHP versions >= 5.2
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @author      Emilien MOREL <admin@website-php.com>
 * @link        http://www.website-php.com
 * @copyright   WebSite-PHP.com 22/04/2020
 * @version     1.3.1
 * @access      public
 * @since       1.2.0
 */

require('../fpdf.php');

class PDF extends FPDF
{
var $B;
var $I;
var $U;
var $HREF;

	/**
	 * Method PDF
	 * @param string $orientation [default value: P]
	 * @param string $unit [default value: mm]
	 * @param string $format [default value: A4]
	 * @since 1.2.0
	 */
function PDF($orientation='P',$unit='mm',$format='A4')
{
	//Appel au constructeur parent
	$this->FPDF($orientation,$unit,$format);
	//Initialisation
	$this->B=0;
	$this->I=0;
	$this->U=0;
	$this->HREF='';
}

function WriteHTML($html)
{
	//Parseur HTML
	$html=str_replace("\n",' ',$html);
	$a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
	foreach($a as $i=>$e)
	{
		if($i%2==0)
		{
			//Texte
			if($this->HREF)
				$this->PutLink($this->HREF,$e);
			else
				$this->Write(5,$e);
		}
		else
		{
			//Balise
			if($e[0]=='/')
				$this->CloseTag(strtoupper(substr($e,1)));
			else
			{
				//Extraction des attributs
				$a2=explode(' ',$e);
				$tag=strtoupper(array_shift($a2));
				$attr=array();
				foreach($a2 as $v)
				{
					if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
						$attr[strtoupper($a3[1])]=$a3[2];
				}
				$this->OpenTag($tag,$attr);
			}
		}
	}
}

function OpenTag($tag,$attr)
{
	//Balise ouvrante
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,true);
	if($tag=='A')
		$this->HREF=$attr['HREF'];
	if($tag=='BR')
		$this->Ln(5);
}

function CloseTag($tag)
{
	//Balise fermante
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,false);
	if($tag=='A')
		$this->HREF='';
}

function SetStyle($tag,$enable)
{
	//Modifie le style et sélectionne la police correspondante
	$this->$tag+=($enable ? 1 : -1);
	$style='';
	foreach(array('B','I','U') as $s)
	{
		if($this->$s>0)
			$style.=$s;
	}
	$this->SetFont('',$style);
}

function PutLink($URL,$txt)
{
	//Place un hyperlien
	$this->SetTextColor(0,0,255);
	$this->SetStyle('U',true);
	$this->Write(5,$txt,$URL);
	$this->SetStyle('U',false);
	$this->SetTextColor(0);
}
}

$html='Vous pouvez maintenant imprimer facilement du texte mélangeant différents styles : <b>gras</b>,
<i>italique</i>, <u>souligné</u>, ou <b><i><u>tous à la fois</u></i></b> !<br><br>Vous pouvez aussi
insérer des liens sous forme textuelle, comme <a href="http://www.fpdf.org">www.fpdf.org</a>, ou bien
sous forme d\'image : cliquez sur le logo.';

$pdf=new PDF();
//Première page
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
$pdf->Write(5,'Pour découvrir les nouveautés de ce tutoriel, cliquez ');
$pdf->SetFont('','U');
$link=$pdf->AddLink();
$pdf->Write(5,'ici',$link);
$pdf->SetFont('');
//Seconde page
$pdf->AddPage();
$pdf->SetLink($link);
$pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
$pdf->SetLeftMargin(45);
$pdf->SetFontSize(14);
$pdf->WriteHTML($html);
$pdf->Output();
?>
