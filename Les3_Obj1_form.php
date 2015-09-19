<style>
.red{ color: red; }
</style>
<body>
<h3>Welcome to the Homesick Restaurant&apos;s Online Menu</h3>

<?php
if($_GET['error']){
	echo '<div class="red">Please select an entree</div>';
}
?>

<form method= "GET" action="Les3_Obj1_process.php">

Select an Entree:


<select name="entree_choice">
<option value="">What&apos;s for dinner?</option>
<option value="Steak">Steak</option>
<option value="Salmon">Salmon</option>
<option value="Barbecue Pork">Barbecue Pork</option>
<option value="Chicken">Chicken</option>
</select>
<input type="submit" value="SUBMIT"/>

</form>
</body>
