<?php 
/**
 * ^title^Pet Crud^/title^
 * 
 * ^gitRepo^https://github.com/SethKalkstein/PHP_MySQLI_CRUD^/gitRepo^
 * 
 * ^tech^PHP, MySQL, Apache^/tech^
 * 
 * ^highlights^CRUD, REST, Data Validation, Random Generator, mysqli, Foreign Key^/highlights^
 * 
 * ^description^Displays CRUD functionality using RESTful requests. Uses joined views for indivual record display. Uses the same page for update and delete. (Almost no styling.)^/description^
 * 
 * ^image^petCrud.png^/image^
 * 
 * ^path^here^/path^
 * 
 * ^order^3^/order^
 * 
 */
?>
<?php
	//establish database connections
	require ("config/dbconnect.php");

	//write queries
	$sqldata = "select Pet.petID, Pet.petName, Pet.petAge, Pet.petSpecies, Human.humanName from Human, Pet where Pet.humanID = Human.humanID ORDER BY petName";

	//make querry and get results
	$result = mysqli_query($conn, $sqldata);

	//fetch the resulting rows. $pets will be an ordered array, but each value of the ordered array will be an associate array with a key value pair equal to the column name as the key and the value in the row/column as the value

	while($pet = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$pets[] = $pet;	
	}

	//free the result from memory
	mysqli_free_result($result);

	//close sql connection
	mysqli_close($conn);

?>

<?php require("templates/header.php");?>

	<h3>Pets from Database</h3>

	<?php $petCount = count($pets); ?>
<!-- loop though all of the pets and output them to html -->
	<?php for($i = 0; $i < $petCount; $i++) { ?>
		<div class = "aPet">
		<h4><?php echo htmlspecialchars($pets[$i]["petName"]); ?></h4>
			<ul>
				<?php $labels = ["petAge" => "Pet's Age", "petSpecies" => "Pet's Species", "humanName" => "Human's Name"]; ?>
				<?php foreach($pets[$i] as $key => $value){ ?>
					<?php if($key != "petID" && $key != "petName") { ?>
						<li>
							<?php echo htmlspecialchars($labels[$key]) . ": " . htmlspecialchars($value); ?>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
			<a href="details.php?petID=<?php echo $pets[$i]["petID"] ?>">more info</a>
		</div>
	<?php } ?>
<?php require("templates/footer.php");?>
