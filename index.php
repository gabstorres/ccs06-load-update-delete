<?php

require "config.php";

use App\Pet;

$pets = Pet::list();
?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $pet): ?>
<tr>
<td><?php echo $pet->getId(); ?></td>
<td><?php echo $pet->getPetName(); ?></td>
<td><?php echo $pet->getPetGender(); ?></td>
<td><?php echo $pet->getPetBirthday(); ?></td>
<td><?php echo $pet->getOwnerName(); ?></td>
<td><?php echo $pet->getEmail(); ?></td>
<td><?php echo $pet->getAddress(); ?></td>
<td><?php echo $pet->getContact(); ?></td>


<td>
	<a href="edit-pet.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-pet.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>
