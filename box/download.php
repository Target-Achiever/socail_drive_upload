<?php

if(!empty($_POST)) {
	
	$download_url = $_POST['value'][0]['@microsoft.graph.downloadUrl'];

	$file_content = @file_get_contents($download_url);

	file_put_contents('filename.pdf', $file_content);

	echo "success";
}



?>