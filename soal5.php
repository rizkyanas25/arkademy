<html>
<head>
    <title>Jawaban No.5</title>
</head>
<body>
    <form action="" method="POST">
        Masukkan Teks 
        <input type="text" name="name">
        <br>
        Masukkan Karakter Yang Diganti 
        <input type="text" name="ganti">
        <br>
        Masukkan Karakter Pengganti 
        <input type="text" name="diganti">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $ganti = $_POST['ganti'];
            $diganti = $_POST['diganti'];
            $namesArray = str_split($name);
            
            for ($i = 0; $i < sizeof($namesArray); $i++) {
                if ($namesArray[$i] == $ganti) {
                    $namesArray[$i] = $diganti;
                }
            }

            echo implode(" ",$namesArray);
        }
        
        // function ($name, $char_a, $char_b) {
        //     for ($i = $name.leng)
        // }
    ?>
</body>
</html>