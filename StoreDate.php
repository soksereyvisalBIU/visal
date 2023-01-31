
<?php
if (isset($_POST["submit"])) {
    system('clear');
    $user = ["name" => $_POST["Name"], "food" => $_POST["food"], "price" => $_POST['price']];
    echo "Payment :" . $_POST["price"];
    print "<table border=\"1px\">\n";
    foreach ($user as $key => $value) {
        print "<tr> <td>$key</td> <td>$value</td> </tr>\n";
    }
    print "</table>";
}
else{
    ?>
            <form action="StoreDate.php" method="post">
            Customer : <input type="text" name="Name"> <br>
            Food : <input type="radio" name="food" id="break" value="break"> Breakfast
            <input type="radio" name="food" id="lunch" value="lunch"> Lunch
            <input type="radio" name="food" id="dinner" value="dinner"> Dinner <br>
            Price : <input type="number" name="price">
            <button name="submit" type="submit" id="submit">Calculate</button>
        </form>
<?php
}
?> 