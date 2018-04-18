This repo contains timetable for urban communication. 
Firstly, PHP script gets timetables from text file. Nextly you can set numbers of nearest  buses, tramways etc to display it.
Screen with using this script in example site
<img src="https://image.ibb.co/ff3cGn/1.png" alt="1" border="0"> <br /><br />
<b>How to use:</b>
Be shure that you upload main_function.php to server.
example calling function:
calculate($handle,$hours_flag, $alert_value,$how);
calculate("timetables/7_zolnierska.txt",0,2,2);

handle=path to timetable
hours flag= show hours. 1- show, 0-hide
alert_value= minutes
how= how many timetables
