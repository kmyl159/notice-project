<?php   
        require_once 'layout/header.php';
        require_once 'classes/noticia.php';
        
    global $pdo;
    
    $n = new Noticia();
    $cadastro = null;
         
    $cadastro = $n->cadastrarNoticia($cadastro);
   
?>

<div class="cadastro-container">
    <form method="POST" class="formulario-box">
        <h1>cadastrar noticia</h1>
        <input type="text" name="titulo" placeholder="Titulo da noticia"  required="required">
        <input type="text" name="categoria" placeholder="Categoria da noticia"  required= "required">
        <textarea name="conteudo"  cols="30" rows="10" placeholder="conteudo da noticia"  
       ></textarea>
        <input type="submit" value="enviar" name="enviar" >
    </form>
    <?php if($cadastro == 'sucesso'):?>
        <div class="box-sucesso">
            <p>noticia salva com sucesso</p>
        </div>
    <?php endif;?>
    <?php if($cadastro == 'existente'):?>
        <div class="box-existente">
            <p>noticia já existe</p>
        </div>
    <?php endif;?>
    <?php if($cadastro == 'falha') :?>
        <div class="box-falha">
            <p>erro ao cadastrar noticia <br> Preencha todos os campos</p>
        </div>
    <?php endif;?>
</div>
    <?php require_once 'layout/footer.php';?>