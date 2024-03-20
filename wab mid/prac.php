
<form method="post">
    Enter n: <input type="number" name="n">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $c=0;
    echo '<table border="1" cellpadding="3px" cellspacing="0px">';
    for ($i = 0; $i < $n; $i++) {
        echo '<tr>';
        if($i==$c){
            for ($j = 0; $j < $n; $j++) {
                if (($j) % 2 == 0) {
                    echo '<td width="30px" height="30px" ></td>';
                    
                } else {echo '<td width="30px" height="30px" bgcolor="black"></td>';
    
                }
            }
            $c=$c+3;
        }

        else{
            for ($j = 0; $j < $n; $j++) {
                echo '<td width="30px" height="30px" bgcolor="black"></td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

