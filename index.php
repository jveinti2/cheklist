<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>CheckList Fctura móvil</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<style>
  body {
    background-image: url(./public/assests/fondo_checklist.png);
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    overflow: hidden;
  }

  body::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width:65%;
    height: 100%;
    background: linear-gradient(to left, #e0e0e000, #ddd, #ddd, #ddd, #ddd);
    z-index: -1;
  }
</style>

<body>
  <div style="height: 100vh" class="valign-wrapper">
    <div class="container">
      <form id="formUser" method="POST" action="validarLogin.php" style="z-index: 1;">
        <div class="row">
          <div class="col s3">
            <img src="./public/assests/logo_3.png" style="width: 430px;" alt="imagen">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input name="userLogin" type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Usuario</label>
              </div>
            </div>
            <button style="width: 100%; background-color: #bfdf13;" class="waves-effect waves-light btn" form="formUser">ingresar</button>
          </div>
        </div>
      </form>
      <img style="margin-top: 100px;" src="./public/assests/logo_1.png">
      <p>Creado por e-learning group</p>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>