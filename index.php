<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>CheckList Fctura móvil</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <nav style="position: fixed; z-index: 1;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">fact_check</i>CheckList - Factura Móvil</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <!-- left -->
    <div class="col s3">

      <ul class="sidebar">
        <li onmouseover="mostrarLista1()" onmouseout="ocultarLista1()">
          <button class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;">Descuentos no
            aplicados</button>
          <ul id="lista_btn-1" style="z-index: 2;display: none; position: absolute; top: 0px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a onclick="buscarArticulo()" class="collection-item">Retención</a>
                <a href="#!" class="collection-item">Campaña Legacy</a>
                <a href="#!" class="collection-item">Campaña Rusia</a>
                <a href="#!" class="collection-item">Plan Familia</a>
              </div>
            </li>
          </ul>
        </li>
        <li onmouseover="mostrarLista2()" onmouseout="ocultarLista2()">
          <button class=" btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;" onmouseover="">Incremento de factura</button>
          <ul id="lista_btn-2" style="z-index: 2;display: none; position: absolute; top: 55px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a href="#!" class="collection-item">Apps Premium</a>
                <a href="#!" class="collection-item">Intereses y Honorarios</a>
                <a href="#!" class="collection-item">LDI</a>
                <a href="#!" class="collection-item">Roaming</a>
                <a href="#!" class="collection-item">Cobro Doble cta Activa</a>
              </div>
          </ul>
        </li>
        <li onmouseover="mostrarLista3()" onmouseout="ocultarLista3()">
          <a class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;">Explicación
            factura
            después retiro</a>
          <ul id="lista_btn-3" style="z-index: 2;display: none; position: absolute; top: 110px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a href="#!" class="collection-item">Prorateo</a>
                <a href="#!" class="collection-item">plan cancelado cta activa<a>
              </div>
          </ul>
        </li>
        <li onmouseover="mostrarLista4()" onmouseout="ocultarLista4()">
          <buttton class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;">Agencias de
            cobranza
          </buttton>
          <ul id="lista_btn-4" style="z-index: 2;display: none; position: absolute; top: 170px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a href="#!" class="collection-item">Agencias de cobranza</a>
                <a href="#!" class="collection-item">plan cancelado cta activa<a>
                    <a href="#!" class="collection-item">Credivalores<a>
              </div>
          </ul>
        </li>
        <li onmouseover="mostrarLista5()" onmouseout="ocultarLista5()">
          <button class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;">Cronograma de
            facturación</button>
          <ul id="lista_btn-5" style="z-index: 2;display: none; position: absolute; top: 225px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a href="#!" class="collection-item">Pendiente</a>
              </div>
          </ul>
        </li>
        <li onmouseover="mostrarLista6()" onmouseout="ocultarLista6()">
          <button class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px;">Factura Cliete
            Nuevo</button>
          <ul id="lista_btn-6" style="z-index: 2;display: none; position: absolute; top: 280px; left: 320px; width: 60%;">
            <li>
              <div class="collection" style="background-color: #fff;">
                <a href="#!" class="collection-item">Pendiente</a>
              </div>
          </ul>
        </li>
      </ul>
    </div>

    <!-- right -->
    <div class="col s9" style="padding: 90px 20px 20px 40px;">
      <div id="contenidoArticulos">
        <!-- ajax response -->
        <!-- collapsible -->
        
      </div>


    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="/js/main.js"></script>
  <!--  Scripts-->
  <!-- ajarx -->
  <script>
    function objetoAjax() {
      var xmlhttp = false;
      try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        try {
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
          xmlhttp = false;
        }
      }
      if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
      }
      return xmlhttp;
    }

    function buscarArticulo() {
      var contenidoArticulos = document.getElementById("contenidoArticulos");
      ajaxRetencion = objetoAjax();
      ajaxRetencion.open("POST", "ajaxRetencion.php", true);
      ajaxRetencion.onreadystatechange = function() {
        if (ajaxRetencion.readyState == 4) {
          contenidoArticulos.innerHTML = ajaxRetencion.responseText;
          console.log(ajaxRetencion.responseText)
        }
      }
      ajaxRetencion.send();

      // var descuentos = document.getElementById("descuentos");
      // ajaxDesc = objetoAjax();
      // ajaxDesc.open("POST", "descuentos.php", true);
      // ajaxDesc.onreadystatechange = function () {

      //   if (ajaxDesc.readyState == 4) {
      //     descuentos.innerHTML = ajaxDesc.responseText;

      //   }
      // }
      // ajaxDesc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      // ajaxDesc.send("id_ofertas=" + id_ofertas + "&estrato=" + estrato);
    }
  </script>

</body>

</html>