<?php
$array = array (
		'websites' => array (
				'Search' => 'Google',
				'Social' => 'Facebook',
				'News' => 'NY Times' 
		),
		'friends' => array (
				'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna' 
		) 
);

$shifted = array_shift ( $array );

array_push ( $array, $shifted );

$shifted = array_pop ( $array ); //POP!
echo "<pre>";
print_r ( $array );

// print_r ( $shifted );
?>