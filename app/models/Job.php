<?php
class Job extends AppModel{
	var $name="Job";
	var $belongsTo=array(
		"Car", "Worker"
	);
}
?>