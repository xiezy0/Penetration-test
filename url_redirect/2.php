<?php 
//whitelist
	header("Content-Type:text/html;charset=utf-8");  
    
    $str="/^((http|https):\/\/)?(.*\.test\.com)(\/)?.*$/";
	#$str="/^((http|https):\/\/)?(.*\.test\.com\/).*$/";
	#$str="/^((http|https):\/\/)?([^\/]*\.test\.com\/).*$/";
	#$str="/^((http|https):\/\/)?([^\?]*\.test\.com\/).*$/";
	#$str="/^((http|https):\/\/)?([^\?\/]*\.test\.com\/).*$/";
	if(isset($_REQUEST["url"]))  
	{ 
	    $url1=$_REQUEST["url"];	
        echo "$str<p>";
		if(preg_match($str, $url1)){
		        header("HTTP/1.1 301 Moved Permanently");
		        header("Location: $url1");	
		}
		else{
                	echo "url is illegal";
		}
	}
	else{
		echo "url is null";
	}

?> 
