<?php 
	require_once('lib/nusoap.php'); 

	$param = array('x'=>2,'y'=>2);

	try{
	$client = new SoapClient("http://localhost/soapwsdl/nusoap/server.php?wsdl");

	$response = $client->__call('tambah',$param);

	}catch(SoapFault $e)
	{
		echo "Error : " ; 
		echo $e-> getMessage();
		echo 'Last response : '. $client->__getLastResponse(); 
		
	}

	echo "Hasil dari Pertambahanya adalah : ".$response;





 ?>