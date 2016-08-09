<?php
class Car extends AppModel{
	var $name = 'Car';
	var $displayField = "matricula";
	var $hasMany = "Job";
}
?>