<?php
include "./db/db.php";
session_start();
if (!isset($_SESSION['userLogin'])) {
  header('Location: index.php');
}
?>

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

<body>
  <nav style="position: fixed; z-index: 2;">
    <div class="nav-wrapper">
      <img href="#!" src="./public/assests/logo_3.png" class="brand-logo responsive-img" style="width: 400px; left: 20px;">
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
        <span style="margin-right: 10px;"> Hola <?= $_SESSION["userLogin"] ?><i class="material-icons left" style="margin-left: 10px;">waving_hand</i></span>
      </ul>
    </div>
  </nav>
  <div class="row">
    <!-- left -->
    <div class="col s3">
      <div>
        <div>

          <form method="POST">
            <ul class="sidebar-fixed">
              <li onmouseover="mostrarLista1()" onmouseout="ocultarLista1()">
                <a class="btn btnSidebar" style="margin: 10px;background-color: #263a7c; font-size: 12px">Descuentos no aplicados</a>
                <ul id="lista_btn-1" style="z-index: 2;display: none; position: absolute; top: 0px; left: 320px; width: 60%;">
                  <li>
                    <div class="collection" style="background-color: #fff;">
                      <a href="#!" onclick="buscarRetencion()" class="collection-item">Retención</a>
                      <a href="#!" onclick="buscarLegacy()" class="collection-item">Campaña Legacy</a>
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
          </form>

        </div>
      </div>

    </div>

    <!-- right -->
    <div class="col s9" style="padding: 90px 20px 20px 40px;">
      <form id="formularioRegister" method="POST">
        <div id="contenidoArticulos">
          <!-- ajax response -->
          <!-- collapsible -->
          <!-- paso 1 -->
          <center>
            <h4 style='margin: 0;'>Campaña Legacy</h4>
          </center>
          <span>Si nos contacta un usuario manifestando que le ofrecieron un descuento por promoción Legacy (Esta se otorga a líneas de planes antiguos (Atp o Internet Móvil), los cuales fueron migrados a la nueva oferta Pospago 5.0), y no se lo han aplicado, debemos:</span>
          <div class='wrapper'>
            <div class='collapsible'>
              <input type='radio' name='collab' id='collapsible-head1'>
              <label for='collapsible-head1'>1. Primer paso</label>
              <div class='collapsible-text'>
                <span>Consultar con el número de la línea en CBS en el módulo de descuentos si se aplicó o no sobre el CB del plan.</span>
                <img src="./public/assests/legacy_paso1.png" class="responsive-img">
                <center>
                  <div class='row'>
                    <div class='col s6' style='padding: 10px;'>
                      <div class='z-depth-1' style='padding: 10px;'>
                        <div style='padding: 10px;'>
                          <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿Tiene el módulo con el DCTO cargado?</b></blockquote>
                        </div>
                        <div style='padding: 10px;'>
                          <button class='waves-effect btn' onclick='mostrarSiPaso1()' style='background-color: #027be3;color: #fff; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>SI</button>
                          <button class='waves-effect btn' onclick='mostrarNoPaso1()' style='background-color: #d9ebfb;color: #027be3; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>NO</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </center>
                <!-- contenido del paso -->
                <!-- si -->
                <div id='DivPaso1Si' style='display: none; padding: 20px;'>
                  <h5>Acción SI</h5>
                  <p>Debemos identificar si la línea cumple con las condiciones para aplicar el DCTO:</p>
                  <ul>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Contact N1 escalar en: IG – Descuento no aplicado Factura Táctico N1.</p>
                    <li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Contact N2 escalar en: IG - Procesos Pendientes Retención Contact.</p>
                    </li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Tiendas escalar en: IG-Ajustes no aplicados Retención solo CDET.</p>
                    </li>
                  </ul>
                  <img src="./public/assests/legacy_paso1-2.png" class="responsive-img">
                  <h5>¿Cómo lo identificamos?</h5>
                  <p>Ingresamos a CRM - Consultas - Consulta Posventa - Consulta Integral - Nueva Pantalla Unica Clientes - Posventa - transacciones CRM</p>
                  <img src="./public/assests/legacy_paso1-3.png" class="responsive-img">
                  <p>Luego de garantizar que el usuario cumpla con las condiciones debemos realizar un ajuste a través de CRM y escalar en planilla <a href="https://esurvey.emtelco.co/ErrorFormPrivate/">E-survey</a>.</p>
                  <p><b>Nombre de la planilla:</b> IG-Ajuste-Migración automática Internet Móvil Tigo a Pos 5.2</p>
                </div>
                <!-- no -->
                <div id='DivPaso1No' style='display: none; padding: 20px;'>
                  <h5>Acción NO</h5>
                  <p>Debemos realizar la consulta en CRM, Consultas→ Consulta Posventa→ Consulta Integral→ Nueva Pantalla única de clientes→ Promoción→ Resumen→ Consultar Promociones</p>
                  <img class='responsive-img' src='./public/assests/legacy_paso1-no-1.png'>
                  <img class='responsive-img' src='./public/assests/legacy_paso1-no-2.png'>
                  <img class='responsive-img' src='./public/assests/legacy_paso1-no-3.png'>
                  <center>
                    <div class='row'>
                      <div class='col s6' style='padding: 10px;'>
                        <div class='z-depth-1' style='padding: 10px;'>
                          <div style='padding: 10px;'>
                            <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿Tiene la promoción creada en CRM?</b>
                            </blockquote>
                          </div>
                          <div style='padding: 10px;'>
                            <button class='waves-effect btn' onclick='mostrarSiNoPaso1()' style='background-color: #027be3;color: #fff; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>SI</button>
                            <button class='waves-effect btn' onclick='mostrarNoNoPaso1()' style='background-color: #d9ebfb;color: #027be3; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>NO</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </center>
                  <!-- si del no -->
                  <div id="DivPaso1SiNo" style='display: none; padding: 20px;'>
                    <p>Debemos ingresar de nuevo en CBS, identificar el CB del plan y compararlo con los valores facturados, para esto nos ubicarnos en la de la parte final de CBS con nombre Factura Cuenta.</p>
                    <p><b>Ejemplo.</b></br>
                      Plan Facturado: Pos 5.2 $ 75.000</br>
                      % Descuento: 60%</br>
                      Valor Descuento: $45.000</br>
                      Valor Aproximado factura: $30.000
                    </p>
                    <img class='responsive-img' src='./public/assests/legacy_paso1-no-no-1.png'>
                    <center>
                      <div class='row'>
                        <div class='col s6' style='padding: 10px;'>
                          <div class='z-depth-1' style='padding: 10px;'>
                            <div style='padding: 10px;'>
                              <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿Los valores coinciden?</b>
                              </blockquote>
                            </div>
                            <div style='padding: 10px;'>
                              <button class='waves-effect btn' onclick='mostrarSiSiNoPaso1()' style='background-color: #027be3;color: #fff; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>SI</button>
                              <button class='waves-effect btn' onclick='mostrarNoSiNoPaso1()' style='background-color: #d9ebfb;color: #027be3; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>NO</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </center>
                  </div>
                  <!-- si del si del no -->
                  <div id="DivPaso1SiSiNo" style='display: none; padding: 20px;'>
                    <p>Indicar al usuario que el porcentaje de descuento ya está aplicado.</p>
                  </div>
                  <!-- no del si del no -->
                  <div id="DivPaso1NoSiNo" style='display: none; padding: 20px;'>
                    <p>Debemos ingresar al detalle de la factura para verificar los consumos</p>
                    <img src="./public/assests/legacy_paso1-no-si-no-1.png">
                    <p>Debemos identificar que no tenga cobros adicionales por Amazon, Deezer, Interes, Impuestos departamentales, cobro de dos periodos en una factura etc.</p>
                    <img src="./public/assests/legacy_paso1-no-si-no-2.png">
                    <center>
                      <div class='row'>
                        <div class='col s6' style='padding: 10px;'>
                          <div class='z-depth-1' style='padding: 10px;'>
                            <div style='padding: 10px;'>
                              <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿Tiene cobros adicionales?</b>
                              </blockquote>
                            </div>
                            <div style='padding: 10px;'>
                              <button class='waves-effect btn' onclick='mostrarSiNoSiNoPaso1()' style='background-color: #027be3;color: #fff; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>SI</button>
                              <button class='waves-effect btn' onclick='mostrarNoNoSiNoPaso1()' style='background-color: #d9ebfb;color: #027be3; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>NO</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </center>
                  </div>
                  <!-- Si del No del Si del No  -->
                  <div id="DivPaso1SiNoSiNoPaso1" style='display: none; padding: 20px;'>
                    Prueba Si
                  </div>
                  <div id="DivPaso1NoNoSiNoPaso1" style='display: none; padding: 20px;'>
                    Prueba No
                  </div>
                  <!-- No del No del Si del No  -->
                  <!-- no del no -->
                  <div id="DivPaso1NoNo" style='display: none; padding: 20px;'>
                    <p>Se realiza PQR con la siguiente tipología:</p>
                    <p>Tipo: Queja (Factura) </br>
                      Subtipo: Información/Contrato y Condiciones Prestación del servicio </br>
                      Motivo: Modificación Condiciones Acordadas</p>
                  </div>
                </div>
              </div>
              </li>
            </div>
          </div>
          <!-- paso2 -->
          <div class='wrapper'>
            <div class='collapsible'>
              <input type='radio' name='collab' id='collapsible-head2'>
              <label for='collapsible-head2'>2. Segundo paso</label>
              <div class='collapsible-text'>
                <span>Con el número de la línea debemos ingresar a CRM – Consultas - Consulta Posventa - Consulta Integral- Nueva Pantalla Unica Clientes – Promociones – Resumen – Consulta de promociones y verificar si el modulo del descuento esta creado.</span>
                <img src='./public/assests/retencion_paso2.png' class='responsive-img'>
                <center>
                  <div class='row'>
                    <div class='col s6' style='padding: 10px;'>
                      <div class='z-depth-1' style='padding: 10px;'>
                        <div style='padding: 10px;'>
                          <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿El modulo esta creado?</b>
                          </blockquote>
                        </div>
                        <div style='padding: 10px;'>
                          <button class='waves-effect btn' onclick='mostrarSiPaso2()' style='background-color: #027be3;color: #fff; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>SI</button>
                          <button class='waves-effect btn' onclick='mostrarNoPaso2()' style='background-color: #d9ebfb;color: #027be3; font-weight: bold;border: none;border-radius: 2px;width: 80px;' href='#'>NO</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </center>
                <!-- contenido del paso -->
                <!-- si -->
                <div id='DivPaso2Si' style='display: none; padding: 20px;'>
                  <h5>Acción SI</h5>
                  <p>Si el modulo <b>fue creado después de la generación de la última factura,</b> el DCTO se aplicará en
                    el
                    ciclo siguiente.<br><b>Si el modulo fue creado antes de la generación</b> de la última factura y <b>el
                      DCTO no se aplicó, debemos identificar:</b>
                  </p>
                  <ul>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>La línea no puede entrar en
                        suspensión.</p>
                    <li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>La línea debe conservar el
                        mismo
                        plan en el que se
                        configuro el descuento.</p>
                    </li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Que exista una PQR como soporte
                        del beneficio.</p>
                    </li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>No tener suspensión</p>
                    </li>
                  </ul>
                  <img src='./public/assests/btn1_retencion_paso2_si.png' class='img-responsive'>
                  <h5>¿Cómo lo identificamos?</h5>
                  <p>Ingresamos a CRM - Consultas - Consulta Posventa - Consulta Integral - Nueva Pantalla Unica Clientes
                    -
                    Posventa - transacciones CRM</p>
                  <img src='./public/assests/btn1_retencion_paso2_si_img2.png' class='responsive-img'>
                  <p>Luego de garantizar que el usuario cumpla con las condiciones debemos realizar un ajuste a través de
                    CRM.</p>

                </div>
                <!-- no -->
                <div id='DivPaso2No' style='display: none; padding: 20px;'>
                  <h5>Acción NO</h5>
                  <p><b>Realizar el ajuste a través de CRM</b> teniendo en cuenta <b>el % de DCTO</b> ofrecido.</p>
                  <p><b>Escalar en la planilla e-Survey solicitando la configuración del módulo en CRM</b> para que el
                    DCTO
                    se programe mes a mes.</p>
                  <ul>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Contact N1 escalar en: IG – Descuento no aplicado Factura Táctico N1.</p>
                    <li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Contact N2 escalar en: IG - Procesos Pendientes Retención Contact.</p>
                    </li>
                    <li>
                      <p><i class='material-icons left' style='color: #D4D800;'>warning</i>Si el ajuste fue ofrecido desde
                        Tiendas escalar en: IG-Ajustes no aplicados Retención solo CDET.</p>
                    </li>
                  </ul>
                </div>

              </div>
              </li>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="./js/main.js"></script>
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

    function buscarRetencion() {
      var contenidoArticulos = document.getElementById("contenidoArticulos");
      ajaxRetencion = objetoAjax();
      ajaxRetencion.open("POST", "ajaxRetencion.php", true);
      ajaxRetencion.onreadystatechange = function() {
        if (ajaxRetencion.readyState == 4) {
          contenidoArticulos.innerHTML = ajaxRetencion.responseText;
          console.log(ajaxRetencion.responseText)
        }
      }
      ajaxRetencion.send("articulo=" + 'retencion');
    }

    function buscarLegacy() {
      var contenidoArticulos = document.getElementById("contenidoArticulos");
      ajaxLegacy = objetoAjax();
      ajaxLegacy.open("POST", "ajaxLegacy.php", true);
      ajaxLegacy.onreadystatechange = function() {
        if (ajaxLegacy.readyState == 4) {
          contenidoArticulos.innerHTML = ajaxLegacy.responseText;
          console.log(ajaxLegacy.responseText)
        }
      }
      ajaxLegacy.send("articulo=" + 'retencion');
    }
  </script>
</body>

</html>