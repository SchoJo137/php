<!doctype html>
<html lang="de">

<head>
  <title>PHP-Übungen</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <div class="container">
    <div class="row">
        <h1>Meine ersten PHP Versuche</h1>
        <div class="col">

            <?php 
            print("Hello World! <br />");
            echo "So geht Echo <br />";

#            phpinfo();

            $br = "<br />";
            $var1 = "Hello World 2 <br />";
            print($var1);
        
            $name = "Muller";
            print("Guten Morgen Herr $name! <br />");
            
            var_dump($name);
            
            $zahl1 = 12;
            $zahl2 = 23.2;
            $ergebnis = $zahl1 + $zahl2;
            print(var_dump($ergebnis));

            print("<br />");

            print(2**10);

            print("<br />");

            // for ($i=0; $i<=20; $i++) {
            //     print(2**$i);
            //     print("<br />");
            // }

            // print("<br />");

            // $i = 0;
            // while ($i<=10) {
            //     print($i);
            //     print ("<br />");
            //     $i++;
            // }
            
            print($br);

            // for ($gerade = 1; $gerade<=40 ;$gerade=$gerade+1) {
            //     print($gerade);
            //     print("<br />");
            // }

            for ($z = 1; $z<=10 ;$z=$z+1) {
                if ($z == 6) {
                    print("igitt");
                    print($br);
                }
                else {
                    print($z);
                    print("<br />");
                }
            }

            ?>

        </div>
    </div>
 </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>


