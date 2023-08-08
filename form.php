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
  
<div class="row justify-content-center align-items-center g-2">
    <div class="col">
    <h1>Mein erstes Formular</h1>

        <form action="auslesen.php" method="POST">

            
            <label for="zahl1">Zahl 1</label>
            <input type="number" name="zahl1" id="zahl1" />
            <label for="zahl2">Zahl 2</label>
            <input type="number" name="zahl2" id="zahl2" />
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

