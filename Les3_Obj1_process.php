<font style="font-size:16px;">
Thank you for dining at the <i>Homesick Restaurant</i>!
<br/>
<br/>

<?
/*Here's where we pull the information from the form into the PHP.*/

$my_entree = $_GET["entree_choice"];//gets the name of the entree the person selected

if ($my_entree == "Steak") {
	$my_drink="Fruit Punch";//associates the steak with fruit punch
}
else if ($my_entree == "Salmon") {
	$my_drink="Ginger Ale";//associates the salmon with ginger ale
}
else if ($my_entree == "Barbecue Pork") {
	$my_drink="Sparkling Cider";//associates the barbecue pork with sparkling cider
}
else if ($my_entree == "Chicken") {
	$my_drink="Diet Coke";//associates the chicken with diet coke
} else {
	//redirect to form if no previous condition was met
	header("Location: Les3_Obj1_form.php?error=1");
}


//this is where we display the data from the form along with static HTML text

$appetizer = "House Salad";
$drink = $my_drink;
$entree = $my_entree;
$dessert = "Apple Pie";

$appetizer_price = 5.95;
$drink_price = 8.95;
$entree_price = 9.75;
$dessert_price = 4.75;

$subtotal = $appetizer_price + $drink_price + $entree_price + $dessert_price;//cost of menu items in order
$tax = $subtotal *.08;//cost with tax
$tip = $subtotal * .15;//cost including tip
$grand_total = $subtotal + $tax + $tip;


?>

<table>
<tr><td><strong>Your Menu Choice</strong></td><td><strong>Item Price</strong></td></tr>
<tr><td><? echo $appetizer; ?></td><td><? echo number_format($appetizer_price,2); ?></td></tr>
<tr><td><? echo $drink; ?></td><td><? echo number_format($drink_price,2); ?></td></tr>
<tr><td><? echo $entree; ?></td><td><? echo number_format($entree_price,2); ?></td></tr>
<tr><td><? echo $dessert; ?></td><td><? echo number_format($dessert_price,2); ?></td></tr>
<tr><td><strong>Subtotal</strong></td><td><? echo number_format($subtotal,2); ?></td></tr>
<tr><td><strong>Tax</strong></td><td><? echo number_format($tax,2); ?></td></tr>
<tr><td><strong>Tip</strong></td><td><? echo number_format($tip,2); ?></td></tr>
<tr><td><strong>Grand Total</strong></td><td><? echo number_format($grand_total,2); ?></td></tr>
</table>
<br/>
Please come see us again!<br>
<a href="Les3_Obj1_form.php">Back to Menu</a>

