<?php 
	require_once('lib/nusoap.php'); 


	$ns = "http://localhost/"; 

	$server= new soap_server;

	$server->configureWSDL("DataMahasiswa",$ns);

	$server->wsdl->schemaTargetNamaSpace = $ns ; 
	

	$server->register('tambah', array('x' =>'xsd:int', 'y'=>'xsd:int')
			,array('result'=>'xsd:int'),$ns);


	function tambah($x, $y)
	{
		return $x + $y ; 
	}
	/*$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '' ; 

	$server->service($HTTP_RAW_POST_DATA);*/
	$server->service(file_get_contents("php://input"));
	exit();
 ?>