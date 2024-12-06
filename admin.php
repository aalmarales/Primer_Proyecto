<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class='container'>
    <div class='row justify-content-center m-5'>
      <div class='card col-4 py-3'>
        <h3 class='m-2'>Administrador</h3><hr>
        <form action="verificar_Login.php" method="post" class='p-3'>
      
          <label>Usuario :
            <input class="form-control" type="text" name="usuario">
          </label><br>
      
          <label>Password :
            <input type="password" class="form-control mb-3" name="password">
          </label><br>
      
          <input type="submit" class="btn btn-info" name="submitBtnLogin" value="Login">
                
         
          
        </form>
        
      </div>
    </div>
    </div>
</body>
</html>