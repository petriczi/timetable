	<?php
// handle=path to timetable
// hours flag= show hours. 1- show, 0-hide
// alert_value= minutes

function calculate($handle,$hours_flag, $alert_value,$how) 
{
	$now=date('H:i');
	$now_hours=date('H');
	$counter=0;
	if ($file = fopen($handle, "r")) {
	$to_time_format= new DateTime();
	$to_time_format = $to_time_format->format("h:i");
    while(!feof($file)) 
		{
        $line = fgets($file);
				$to_time_format=$line;
				$result_hours=floor(( strtotime( $to_time_format ) - strtotime( $now  ) ) / 3600);
				$result_mins=floor((( strtotime( $to_time_format ) - strtotime( $now ) ) / 60) % 60);
				if( ($result_mins<=0) && ($result_hours<=0) ){}
					else
					{
						if ( $hours_flag==1 )
						{
							if ( ($result_mins<= $alert_value) && ($result_hours<1) )								
							{
								print '<font color="red">';
								echo $result_hours.'h'.' :'.$result_mins.' min'.'&nbsp &nbsp &nbsp('.$to_time_format.')'.'<br />';
								print '</font>';
							}
							else
							{
								if ( $counter < $how )
								{
									echo $result_hours.'h '.':'.$result_mins.' min'.'&nbsp &nbsp &nbsp('.$to_time_format.')'.'<br />';
									$counter++;
								}
							}
							
						}
						else// case: hours flag=0
						{
							if ( ($result_mins<= $alert_value) && ($result_hours<1) )								
							{
								print '<font color="red">';
								echo $result_mins.' min'.'&nbsp &nbsp &nbsp('.$to_time_format.')'.'<br />';
								print '</font>';
							}
							else
							{
								if ( $counter < $how )
								{
									echo $result_mins.' min'.'&nbsp &nbsp &nbsp('.$to_time_format.')'.'<br />';
									$counter++;
								}
							}										
						}
					}
    }
    fclose($file);
}
echo "<br /> <br /><br />";
}
?>
