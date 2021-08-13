<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bil">
        <?php class Kalkulator
        {
            //deklarasi variable
            var $add;
            var $kurang;
            var $kali;
            var $bagi;

            //method2 yang ada
            function tambah($num1, $num2)
            {
                echo $this->add = $num1 + $num2;
            }

            function Kurang($num1, $num2)
            {
                echo $this->kurang = $num1 - $num2;
            }

            function Kali($num1, $num2)
            {
                echo $this->kali = $num1 * $num2;
            }

            function Bagi($num1, $num2)
            {
                echo $this->bagi = $num1 / $num2;
            }
        } ?>
    </div>
</body>

</html>