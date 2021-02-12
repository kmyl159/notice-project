
<?php require_once 'classes/noticia.php';
    
?>
<div class="cadastro-container">
    <form method="POST" class="formulario-box">
        <h1></h1>
        <input type="text" name="titulo" placeholder="Titulo da noticia"  
        required="required">
        <input type="text" name="categoria" placeholder="Categoria da noticia"
          required= "required">
        <textarea name="conteudo"  cols="30" rows="10"
        placeholder="conteudo da noticia"></textarea>
</form>