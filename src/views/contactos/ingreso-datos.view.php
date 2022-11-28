<h2>Ingreso de datos</h2>

<form action="<?= $config['url'] ?>?c=Contactos&m=request" method="post">
  <?php $editar = $data['editar']??false; ?>  

  <?php if($editar) : ?>
    <input type="hidden" name='editar' value='1'> 
    <input type="hidden" name='primaria' value="<?= $_POST['id_telefono']??'' ?>"> 
  <?php endif ?>


  <div>
    <label for="id_telefono">Telefono:</label>
    <input type="tel" id="id_telefono" name="id_telefono" value='<?= $_POST['id_telefono']??'' ?>'>
     <p><?= ($data['msg']['msg-telefono']??'') ?></p>
  </div>

 <div>
  <?php $tipoPost = $_POST['tipo']??0; ?>
  
    <label for="tipo">Tipo deTelefono:</label>    
    <select name="tipo" id="tipo">
      <?php foreach($data['tipos'] as $tipo) : ?>
        <option value="<?= $tipo['ID'] ?>"<?= ( $tipo['ID'] == $tipoPost) ? 'selected' : '' ?> ><?= $tipo['DESCRIPCION'] ?></option>
      <?php endforeach ?>
    </select>
 </div>

 <div>
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" value="<?= $_POST['nombres']??'' ?>">
 </div>

 <div>
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" value="<?= $_POST['apellidos']??'' ?>">
 </div>

 <div>
  <label for="fecha">Fecha de Nacimiento:</label>
  <input type="date" id="fecha_nac" name="fecha_nac" value="<?= $_POST['fecha_nac']??'' ?>" min="1900-01-01" max="2200-12-31" >
 </div>

 <div>
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" value="<?= $_POST['correo']??'' ?>">
 </div>

 <div>
    <label for="msg">Direccion:</label>
    <textarea id="direccion" name="direccion" ></textarea>
    
 </div>

 <p><?= ($data['msg']['msg-request']??'') ?></p>


 <div class="button">
  <input type="hidden" value="1" name="submit">
  <button type="submit"><?= ($editar) ? 'Editar' : 'Guardar' ?> </button>
 </div>
 
 
</form>