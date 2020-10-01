<?php

$a = 10;
$b = 11;

# IF = SI
if($a === $b) {
    echo "A es igual que B";
}

# ELSE IF = TAMBIEN
else if ($a > $b) {
    echo "A es mayor que B";
}

# ELSE = SINO
else {
    echo "B es mayor que A";
}


# Switch
$dia = "Monday";

switch ($dia) {
    case "Viernes":
        echo "<p>Go to the party</p>";
        break;

    case "Sabado":
            echo "<p>Enjoy dthe day</p>";
            break;

    case "Domingo":
            echo "<p>Go to the church</p>";
            break;
    
    default:
        echo "<p>Go to work</p>";
        break;
}

?>