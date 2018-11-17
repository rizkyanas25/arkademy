<html>
<head>
    <title>Jawaban No.3</title>
</head>
<body>
    <form action="" method="POST">
        Masukkan Tinggi 
        <input type="text" name="tinggi">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST['submit'])){
            $bin = $_POST['tinggi'];
            $space = 0;
            for ($i=$bin; $i > 0 ; $i--) {
                for ($j=0; $j < $space; $j++) {
                    echo "&nbsp";
                }
                $space++;
                for ($k=$i; $k > 0; $k--) {
                    if ($i == $bin || $i == 1) {
                        echo "*";
                    } else {
                        if ($k==$i || $k==1) {
                            echo "*";
                        } else {
                            echo "&nbsp&nbsp";
                        }
                    }
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>