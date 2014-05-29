<?php

$this->PhpExcel->createWorksheet('Mysheet',0);
PHPExcel_Cell::setValueBinder(new PHPExcel_Cell_AdvancedValueBinder());

$this->PhpExcel->getDefaultStyle()->getFont()->setName('Calibri');
$this->PhpExcel->getDefaultStyle()->getFont()->setSize(10);

$this->PhpExcel->getActiveSheet()->setCellValue('A1','Vehicle Detail');
$this->PhpExcel->getActiveSheet()->setCellValue('A2','S.No.');
$this->PhpExcel->getActiveSheet()->setCellValue('B2','Vehicle');
$this->PhpExcel->getActiveSheet()->setCellValue('C2','Route');
$this->PhpExcel->getActiveSheet()->setCellValue('D2','Start Time');
$this->PhpExcel->getActiveSheet()->setCellValue('E2','End Time');


$this->PhpExcel->getActiveSheet()->mergeCells('A1:F1');
$this->PhpExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(25);
$this->PhpExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$this->PhpExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
//$this->PhpExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Dayton')->setSize(16)->setBold(true);
$this->PhpExcel->getActiveSheet()->getColumnDimension('A:F')->setAutoSize(true);
$this->PhpExcel->getActiveSheet()->getStyle('A2:F2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);


$col=$this->PhpExcel->getActiveSheet()->getHighestColumn();

$sn=1;
$row=3;

foreach($vehicle as $veh):
    foreach($veh['Route'] as $rt):
	$c=0;
        $temp=66;
        $temp1=$temp+1;
        //$this->PhpExcel->getActiveSheet()->mergeCells(chr($temp).'2:'.chr($temp1).'2');
	$this->PhpExcel->getActiveSheet()->setCellValueByColumnAndRow($c++,$row,$sn++);
        $temp+=2;
        $temp1=$temp+1;
	$this->PhpExcel->getActiveSheet()->setCellValueByColumnAndRow($c++,$row,$veh['Vehicle']['name']);
        //$c++;
        //$this->PhpExcel->getActiveSheet()->mergeCells(chr($temp).'2:'.chr($temp1).'2');
	$this->PhpExcel->getActiveSheet()->setCellValueByColumnAndRow($c++,$row,$rt['name']);
        $this->PhpExcel->getActiveSheet()->setCellValueByColumnAndRow($c++,$row,$rt['VehiclesRoute']['start_time']);
        $this->PhpExcel->getActiveSheet()->setCellValueByColumnAndRow($c++,$row,$rt['VehiclesRoute']['start_time']);
	
	$row++;
    endforeach;
endforeach;

$this->PhpExcel->getActiveSheet()->getStyle('A2:Z2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('99CCCC');

$this->PhpExcel->addTableFooter()
	->output();	
?>