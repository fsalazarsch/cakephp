<?php
class Worker extends AppModel{
	var $name="Worker";
	var $displayField = "nombre";
	var $hasMany = "Job";
}
?>