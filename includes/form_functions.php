<?php 

function check_errors($field_names){
	$errors = [];
	foreach ($field_names as $key => $field) {
		$field = trim($field);
		if(!isset($field) OR (empty($field) AND $key !== 'Видимость')){
			$errors[] = $key;
		}
	}
	return $errors;
}
