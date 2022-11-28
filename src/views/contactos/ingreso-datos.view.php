
   <h2>Ingreso de datos</h2>
<form action="/my-handling-form-page" method="post">
 <ul>
 <li>
    <label for="id_telefono">Telefono:</label>
    <input type="text" id="id_telefono" name="id_telefono" required>
  </li>
  <li>
    <label for="tipo">Tipo deTelefono:</label>
 
    <select name="tipo" id="tipo">
  <option value="1">Personal</option>
  <option value="2">Referencia Laborarl</option>
  <option value="3">Referencia familiar</option>
</select>
  </li>
  
  <li>
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" required>
  </li>
  <li>
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required>
  </li>
  <li>
  <label for="fecha">Fecha de Nacimiento:</label>

<input type="date" id="fecha_nac" name="fecha_nac"
       value="1900"
       min="1900-01-01" max="2200-12-31">
  </li>
  <li>
  <label for="email">Correo electrónico:</label>

   <input type="email" id="email" required>
  </li>
  <li>
    <label for="msg">Direccion:</label>
    <textarea id="msg" name="user_message" required></textarea>
  </li>
  <li class="button">
  <button type="submit">Guardar</button>
</li>


 </ul>
</form>