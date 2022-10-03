<!DOCTYPE html>
<html>
    <head> 
        <title>Logika Fuzzy</title>
    </head>
    <body style="text-align: center;">
    <h1> Logika Fuzy </h1>
    <br>
    <br>
    <form method="POST" action="">
        <input type="number" name="input" placeholder="Masukkan angka 1-100" required="">
        <input type="submit" name="submit" value="submit">
    </form>
<h3>Hasil Logika Fuzzy</h3>
<br>
<?php
if(isset($_POST['submit']))
{
    $input = $_POST['input'];
    echo "Angka Yang Anda Masukkan Adalah : <b>", ($input), "</b>";
    
}

</body>
</html>