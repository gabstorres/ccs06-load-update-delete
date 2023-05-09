<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Oreo', 'Female', '2013-12-08','Ashley', 'ashleym@gmail.com', '555 Apple Street NYC', '09223344567');
	echo "<li>Added 1 pet</li>";


	$pets = [
		[
			'pet_name' => 'Krispy',
			'pet_gender' => 'Male',
			'pet_birthday' => '2015-11-04',
			'owner_name' => 'Aj',
			'email' => 'ajcastro@gmail.com',
			'address' => '123 Corn Street NYC',
			'contact' => '0912312322'
		],
		[
			'pet_name' => 'Basy',
			'pet_gender' => 'Male',
			'pet_birthday' => '2015-11-04',
			'owner_name' => 'Dane',
			'email' => 'danecastillo@gmail.com',
			'address' => '223 Kiwi Street NYC',
			'contact' => '091234567'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
