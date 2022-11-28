

<h2>Agenda Busqueda</h2>
<form action="<?= $config['url'] ?>?c=Contactos&m=busqueda" method="post">

  <div>
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres">
  </div>

  <div>
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos">
  </div>

  <div>
    <label for="id_telefono">Telefono:</label>
    <input type="tel" id="id_telefono" name="id_telefono">
  </div>
  <div class="button">
  <button type="submit">buscar</button>
  </div>
</form>
    

<?php if(!empty($data)) : ?>
  <?php foreach($data as $persona) : ?>
        <form action="<?= $config['url'] ?>?c=Contactos&m=editar" method='post'>
          <input type="hidden" name='id_telefono' value='<?= $persona['ID_TELEFONO'] ?>'>
          <input type="hidden" name='tipo' value='<?= $persona['TIPO_TELEFONO'] ?>'>
          <input type="hidden" name='nombres' value='<?= $persona['NOMBRES'] ?>'>
          <input type="hidden" name='apellidos' value='<?= $persona['APELLIDOS'] ?>'>
          <input type="hidden" name='direccion' value='<?= $persona['DIRECCION'] ?>'>
          <input type="hidden" name='correo' value='<?= $persona['CORREO'] ?>'>
          <input type="hidden" name='fecha_nac' value='<?= $persona['FECHA_NAC'] ?>'>

          <span>Teléfono:<?= $persona['ID_TELEFONO'] ?></span>
          
          <span>Nombres:<?= $persona['NOMBRES'] ?></span>
          <span>Apellidos:<?= $persona['APELLIDOS'] ?></span>
          <span>Direccion:<?= $persona['DIRECCION'] ?></span>
          <span>Correo:<?= $persona['CORREO'] ?></span>
          <span>Fecha Nacimiento:<?= $persona['FECHA_NAC'] ?></span>
          <span>Tipo Telefono:<?= $persona['TIPO_TELEFONO'] ?></span>
        <div class="button">
          <button type='submit'>Editar</a>
        </div>
        </form>
      <?php endforeach ?>
<?php endif ?>