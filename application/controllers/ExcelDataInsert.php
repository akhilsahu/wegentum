<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExcelDataInsert extends CI_Controller
{

public function __construct() {
        parent::__construct();
		//echo "hii";exit;
              //  $this->load->library('excel');//load PHPExcel library 
		//$this->load->model('upload_model');//To Upload file in a directory
                $this->load->model('excel_data_insert_model');
}	
	
public	function ExcelDataAdd()	{  
//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
         $configUpload['upload_path'] = 'C:/xampp/htdocs/wegentum/uploads/excel/';
		 //print_r($configUpload['upload_path']);
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('userfile');	
         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
		 $extension=$upload_data['file_ext'];    // uploded file extension
		//print_r($extension);exit;
//$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
	$path=$configUpload['upload_path'].$file_name;
	require_once 'phpexcel/PHPExcel.php';
	require_once 'phpexcel/PHPExcel/IOFactory.php';
	$objPHPExcel = PHPExcel_IOFactory::load($path);
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
		 //print_r($worksheet);exit;
		$worksheetTitle     = $worksheet->getTitle();
		$highestRow         = $worksheet->getHighestRow(); // e.g. 10
	//print_r($highestRow);exit;
		$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		$nrColumns = ord($highestColumn) - 64;
		 "<br>The worksheet ".$worksheetTitle." has ";
		 $nrColumns . ' columns (A-' . $highestColumn . ') ';
		' and ' . $highestRow . ' row.';
		'<br>Data: <table border="1"><tr>';
		for ($row = 1; $row <= $highestRow; ++ $row) {
			'<tr>';
			
			
			  
			
			//for ($col = 0; $col < $highestColumnIndex; ++ $col) {
				$cell1 = $worksheet->getCellByColumnAndRow(0, $row);
				$cell2 = $worksheet->getCellByColumnAndRow(2, $row);
				$cell3 = $worksheet->getCellByColumnAndRow(4, $row);
				$cell4 = $worksheet->getCellByColumnAndRow(5, $row);
				$cell5 = $worksheet->getCellByColumnAndRow(8, $row);
				$cell6 = $worksheet->getCellByColumnAndRow(9, $row);
				$cell7 = $worksheet->getCellByColumnAndRow(11, $row);
				$cell8 = $worksheet->getCellByColumnAndRow(12, $row);
				$val1 = $cell1->getValue();
				//echo $val1;exit;
				$val2 = $cell2->getValue();
				//echo $val2;exit;
				$val3 = $cell3->getValue();
				$val4 = $cell4->getValue();
				$val5 = $cell5->getValue();
				$val6 = $cell6->getValue();
				$val7 = $cell7->getValue();
				$val8 = $cell8->getValue();
				
				
				
				 
			//}
			 '</tr>';
			  $data_user['date']=($val1)?$val1:"";
			  $data_user['client_code']=($val2)?$val2:"";
			 $data_user['symbol']=($val3)?$val3:"";
			  $data_user['scrip_code']=($val4)?$val4:"";
			 $data_user['quantity']=($val5)?$val5:"";
			$data_user['closing_price']=($val6)?$val6:"";
			 $data_user['total_value']=($val7)?$val7:"";
			$data_user['gcml_non_poa']=($val8)?$val8:"";
			
			/*2 pra if($val2)$data_user['client_code']=$val2;
			if($val3)$data_user['symbol']=$val3;
			if($val4)$data_user['scrip_code']=$val4;
			if($val5)$data_user['quantity']=$val5;
			if($val6)$data_user['closing_price']=$val6;
			if($val7)$data_user['total_value']=$val7;
			if($val8)$data_user['gcml_non_poa']=$val8;*/
			

			
			 /* 1 pra $data_user=array('date'=>$val1, 'client_code'=>$val2 ,'symbol'=>$val3 ,'scrip_code'=>$val4 , 'quantity'=>$val5,'closing_price'=>$val6,'total_value'=>$val7,'gcml_non_poa'=>$val8);*/
			  $this->excel_data_insert_model->Add_User($data_user);
			
		}
		 '</table>';
		
	}
	
}
}
?>