<?php  
	header("Content-Type:text/html;charset=utf-8");  
	if(isset($_REQUEST["url"]))  
	{ 
	        $url1=$_REQUEST["url"];	
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $url1");	
		
	}
	else{
		echo "url is null";
	}

?> 
