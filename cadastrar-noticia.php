<?php   
        require_once 'layout/header.php';
        require_once 'classes/noticia.php';
        
    global $pdo;

    $n = new Noticia();

   
    $cadastro = null;
    
    if(isset($_POST['titulo']) AND isset($_POST['categoria']) AND isset($_POST['conteudo'])){
        $titulo = addslashes($_POST['titulo']);
        $categoria = addslashes($_POST['categoria']);
        $conteudo = addslashes($_POST['conteudo']);
        $cadastro = $n->cadastrarNoticia($titulo,$categoria,$conteudo);
    }
?>

<div class="cadastro-container">
    <form method="POST" class="formulario-box">
        <h1>cadastrar noticia</h1>
        <input type="text" name="titulo" placeholder="Titulo da noticia"  required="required">
        <input type="text" name="categoria" placeholder="Categoria da noticia"  required= "required">
        <textarea name="conteudo"  cols="30" rows="10" placeholder="conteudo da noticia"  
        required= "required"></textarea>
        <input type="submit" value="enviar" >
    </form>
    <?php if($cadastro):?>
        <div class="box-sucesso">
            <p>noticia salva com sucesso</p>
        </div>
    <?php endif;?>
    <?php if(!is_null($cadastro) AND !$cadastro) :?>
        <div class="box-falha">
            <p>erro ao cadastrar noticia <br> Preencha todos os campos</p>
        </div>
    <?php endif;?>
</div>
    <?php require_once 'layout/footer.php';?>