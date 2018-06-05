<html>
<head>
<title>Welcome to the to go Pizza Shop!</title>
<h1>Welcome to the to go Pizza Shop!</h1>


<script type="text/javascript">

function runTotal() {
    var total = 0;
    var veg = 10.0;
    var meat = 11.0;
    var cheese = 9.0;
    var addTop = 0.25;
    if(document.forms[0].pizza[0].checked == true) {
        total += veg;
    }
    else if(document.forms[0].pizza[1].checked == true){
        total += meat;
    }
    else if(document.forms[0].pizza[2].checked == true){
        total += cheese;
    }
    for(var i = 0; i < 3; i++){
        if(document.forms[0].toppings[i].checked == true){
            total += addTop;
		}
    }
    document.f1.Total.value =total;
}
</script>
</head>
<body>


<form action="ordernow.php" class="tab" method="post" name="f1">
<p>What type of pizza would you like?</p>
<input type="radio" name="pizza" value="vegetarian" onclick="runTotal();" />Vegetarian $10<br />
<input type="radio" name="pizza" value="MeatLovers" onclick="runTotal();" />Meat Lovers $11<br />
<input type="radio" name="pizza" value="cheese" onclick="runTotal();" />Cheese $9<br />


<p>Would you like extra toppings? select them here:</p>
<input type="checkbox" name="toppings" value="peperoni" onclick="runTotal();" />Peperoni $.25<br/>
<input type="checkbox" name="toppings" value="extraCheese" onclick="runTotal();" />Extra Cheese $.25<br/>
<input type="checkbox" name="toppings" value="mushrooms" onclick="runTotal();" />Mushrooms $.25<br />
<input type="checkbox" name="toppings" value="anchovies" onclick="runTotal();" />Anchovies $.25<br/>

<h3>Total</h3>
<p><input type="text" name=Total value="0"><br /> </p>
<input type="submit" value="submit" /> <input type ="reset">
</form>

</body>
</html>
