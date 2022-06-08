<center>
<form method="POST" enctype="multipart/form-data">
   <label for="conteudo">Enviar Banner:</label>
   <br>
   <input type="file" accept="image/*" name="pic">
   <br>
   <button type="submit">Enviar Banner</button>
</form>
</center>
<?php
if (isset($_FILES['pic'])) {
   $ext = strtolower(substr($_FILES['pic']['name'], -4));
   $new_name = $_FILES['pic']['name'];
   $dir = './imagens/';
   move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name);
   echo ("Imagen enviada com sucesso!");
}
?>