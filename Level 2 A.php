<title>A</title>
<form method="POST" action="">
    <?php
    foreach (range(1, 100) as $num) {
        echo "<input type='number' name='input[]' value='$num'>";
    }
    ?>
    <input type="submit" name="submit">
</form>

<?php

if (isset($_POST["submit"])) {
    $inputs = $_POST['input'];
    $max = max($inputs);

    echo "Bilangan terbesar adalah: $max";
}
?>