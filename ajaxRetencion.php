<?php
include './db/db.php';
session_start();
$usuario = $_SESSION['userLogin'];
$articulo = 'Retención';
$fecha = date('m-d-Y h:i:s a', time());
$subir_datos = "INSERT INTO usabilidad (usuario, articulo, fecha) VALUES ('$usuario', '$articulo', '$fecha')";
$subirDatosDb = mysqli_query($conexion, $subir_datos);
echo "<!-- paso 1 -->
<center><h4 style='margin: 0;'>Retención</h4></center>
<p>Si nos contacta un usuario manifestando que le ofrecieron un descuento por retención o fidelización y no se lo han aplicado, debemos:</p>
<div class='wrapper'>
  <div class='collapsible'>
    <input type='radio' name='collab' id='collapsible-head1'>
    <label for='collapsible-head1'>1. Primer paso</label>
    <div class='collapsible-text'>
      <span>Consultar con el número de la línea en CBS si se aplicó o no un DCTO sobre el CB del plan</span>
      <center>
        <div class='row'>
          <div class='col s6' style='padding: 10px;'>
            <div class='z-depth-1' style='padding: 10px;'>
              <div style='padding: 10px;'>
                <blockquote style='border-left: 5px solid #bfdf13; margin: 0;'><b>¿Se aplicó algún DCTO por
                    Retención?</b></blockquote>
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
        <p>Se realiza la <b>explicación correspondiente de los valores facturados</b> y el
          valor pendiente de pago.</p>
      </div>
      <!-- no -->
      <div id='DivPaso1No' style='display: none; padding: 20px;'>
        <h5>Acción NO</h5>
        <p>Debemos ingresar a <b>CRM – Postventa - Sistema SS y PQRS - Modulo PQRS –
            PQR,</b> la consulta se puede realizar con el número de la línea, numero de la PQR, por cliente o
          por
          número de CUN.</p>
        <img class='responsive-img' src='./public/assests/btn1_retencion_paso1_no.png'>
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
</div>";
