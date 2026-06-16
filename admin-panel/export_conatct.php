<?php
     session_start(); 
	 include('include/db_config.php');
	 if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_name'])){
	    echo '<script>window.location.href="index.php"; </script>'; die;
     }	
	 
	 $results = array();
	 
	 if(isset($_GET['filter'])){
		 $filter = $_GET['filter'];
	 }else{
		 $filter = '';
	 }
	 
	 if($filter == 'today'){
		 $sql = "select * from contacts where created_date = '".date('Y-m-d')."' order by id desc";
	 }else if($filter == 'not_view'){
		 $sql = "select * from contacts where view_status = '0' order by id desc";
	 }else if($filter == 'view'){
		 $sql = "select * from contacts where view_status = '1' order by id desc";
	 }else{
		 $sql = "select * from contacts order by id desc";
	 }
	 
	 
     
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
			  $results[] = $row;
		 }
	 } 
		
	
	
	require 'vendor/autoload.php'; 
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	$spreadsheet = new Spreadsheet(); 
	$sheet = $spreadsheet->getActiveSheet(); 
	$spreadsheet->getActiveSheet()->getStyle('A1')
    ->getNumberFormat()
    ->setFormatCode(
    \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );
	 $dateTime = time(); 
     $excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel(
                  $dateTime );
	$spreadsheet->getActiveSheet()->getStyle('A1:I1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('99ccff');
	$sheet->getStyle('A1:I1')->getFont()->setBold(true)->setSize(15); 
	$sheet->getColumnDimension('A')->setAutoSize(true);
	$sheet->getColumnDimension('B')->setAutoSize(true);
	$sheet->getColumnDimension('C')->setAutoSize(true);
	$sheet->getColumnDimension('D')->setAutoSize(true);
	$sheet->getColumnDimension('E')->setAutoSize(true);
	$sheet->getColumnDimension('F')->setAutoSize(true);
	$sheet->getColumnDimension('G')->setAutoSize(true);
	$sheet->getColumnDimension('H')->setAutoSize(true);
	$sheet->getColumnDimension('I')->setAutoSize(true);
	
	$sheet->setCellValue('A1','NO');
	$sheet->setCellValue('B1','NAME');
	$sheet->setCellValue('C1','EMAIL');
	$sheet->setCellValue('D1','MOBILE');
	$sheet->setCellValue('E1','SUBJECT');
	$sheet->setCellValue('F1','COMPANY NAME');
	$sheet->setCellValue('G1','COUNTRY');
	$sheet->setCellValue('H1','STATE');
	$sheet->setCellValue('I1','CITY');
	$sheet->setCellValue('J1','MESSAGE');
	$sheet->setCellValue('K1','VIEW STAUS');
	$sheet->setCellValue('L1','DATE');
	

     $no = 1; 
    foreach($results as $key=>$excel_data){  $no++;
	    if($excel_data['view_status'] == '0'){
	             $conn->query("update contacts set view_status = '1' where id = ".$excel_data['id']."");
		}
		$sheet->setCellValue('A'.$no.'',$key+1);
		$sheet->setCellValue('B'.$no.'',$excel_data['name']);
		$sheet->setCellValue('C'.$no.'',$excel_data['email']);
		$sheet->setCellValue('D'.$no.'',$row['country_code'].' '.$excel_data['phone']);
		$sheet->setCellValue('E'.$no.'',$excel_data['subject']);
		$sheet->setCellValue('F'.$no.'',$excel_data['company_name']);
		$sheet->setCellValue('G'.$no.'',$excel_data['country']);
		$sheet->setCellValue('H'.$no.'',$excel_data['city']);
		$sheet->setCellValue('I'.$no.'',$excel_data['state']);
		$sheet->setCellValue('J'.$no.'',$excel_data['message']);
		$sheet->setCellValue('K'.$no.'',$excel_data['view_status']);
		$sheet->setCellValue('L'.$no.'',date('M-d-Y h:i:s',strtotime($excel_data['created_at'])));
    }


   
// Write an .xlsx file 
$writer = new Xlsx($spreadsheet);

$FILE_NAME = "Contact-".date('Y-m-d') . ".xlsx";		
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$FILE_NAME.'"');
$writer->save('files/'.$FILE_NAME);
readfile('files/'.$FILE_NAME);

?>