<!doctype html>
<html lang="de">

<head>
  <title>Formular</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<?php
    if (isset($_POST["zahl1"])) {
        print("Das war der rekursive Aufruf");
        
        $fehler = "";
        $zahl1 = $_POST["zahl1"];
        $zahl2 = $_POST["zahl2"];
        
        if ($zahl1=="") {
            $fehler .= "Sie sollten schon etwas bei Zahl 1 eintragen. <br />";
        }  
        else if ($zahl1<0) {
            $fehler .= "Zahl 1 sollte größer oder gleich 0 sein. <br />";
        }
        if ($zahl2=="") {
            $fehler .= "Sie sollten schon etwas bei Zahl 2 eintragen. <br />";
        }  
        else if ($zahl2<0) {
            $fehler .= "Zahl 2 sollte größer oder gleich 0 sein. <br />";
        }
        if ($zahl1>10) {
            $fehler .= "Zahl 1 sollte kleiner oder gleich 10 sein. <br />";
        }
        if ($zahl2>10) {
            $fehler .= "Zahl 2 sollte kleiner oder gleich 10 sein. <br />";
        }
      
      
        if ($fehler=="") {
            $ergebnis = $zahl1 * $zahl2;
            $message = $ergebnis;
        }
        else {
            $message = $fehler;
        }
    
    } 
    
    else {
        print("Das war der Aufruf über die URL");
        $message = "";
        $zahl1 = "";
        $zahl2 = "";
    }
?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col">
    <h1>Das kleine Einmaleins</h1>

        <form method="POST">

            
            <label for="zahl1">Zahl 1</label>
            <input type="number" name="zahl1" id="zahl1" value="<?php print($zahl1);?>" style="color:green;" />
            <label for="zahl2">Zahl 2</label>
            <input type="number" name="zahl2" id="zahl2" value="<?php print($zahl2);?>" style="color:green;" />
            <button type="submit">Abschicken</button>
            
 

            <!-- <label for="" class="form-label">Email:
            <input type="number" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
            </label>
            
            <label for="" class="form-label">Email:
            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
            </label>

            <label for="" class="form-label">Email:
            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
            </label> -->


        </form>
        
        <br />

        <p style="color:red;">
            <?php
            print($message);
            ?>
        </p>

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

