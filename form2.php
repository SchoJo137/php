<!doctype html>
<html lang="de">

<head>
  <title>Formular für Datenbank</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

        <?php
            if (isset($_POST["name"])) {
                print("Das war der rekursive Aufruf");
                
                $fehler = "";
                $name = $_POST["name"];
                $vorname = $_POST["vorname"];
                $staße = $_POST["staße"];
                $plz = $_POST["plz"];
                $stadt = $_POST["stadt"];
                $email = $_POST["email"];
                $geburtsdatum = $_POST["geburtsdatum"];
                
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
    <div class="col mx-auto p-3">

        <form class="row g-3" method="POST">
            
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Müller" />
            </div>
            
            <div class="col-md-6">
                <label for="vorname" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Eva" />
            </div>
            
            <div class="col-12">
                <label for="straße" class="form-label">Straße</label>
                <input type="text" class="form-control" id="staße" name="straße" placeholder="Hauptstraße 1" />
            </div>
            
            <div class="col-md-3">
                <label for="plz" class="form-label">PLZ</label>
                <input type="number" class="form-control" id="plz" name="plz" placeholder="12345" />
            </div>
            
            <div class="col-md-9">
                <label for="stadt" class="form-label">Stadt</label>
                <input type="text" class="form-control" id="stadt" name="stadt" placeholder="Bielefeld" />
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="eva.mueller@email.de" />
            </div>
            
            <div class="col-12">
                <label for="geburtsdatum" class="control-label">Geburtsdatum</label>
                <input type="date" class="form-control" id="geburtsdatum" name="geburtsdatum" placeholder="TT.MM.JJJJ" />
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-secondary">Abschicken</button>
            </div>

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