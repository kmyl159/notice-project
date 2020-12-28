<?php   
        require_once 'layout/header.php';
        
    global $pdo;

    $n = new Noticia();

    $titulo = null;
    $categoria = null;
    $conteudo = null;
    $noticia = null;
    
    if(isset($_POST['titulo']) AND isset($_POST['categoria']) AND isset($_POST['conteudo'])){
        $titulo = addslashes($_POST['titulo']);
        $categoria = addslashes($_POST['categoria']);
        $conteudo = addslashes($_POST['conteudo']);
        $noticia = $n->cadastrarNoticia($titulo,$categoria,$conteudo);
    }

  

?>

<div class="container">
    <form method="POST" class="formulario-box">
        <h1>cadastrar noticia</h1>
        <input type="text" name="titulo" placeholder="Titulo da noticia" id="tit" required="required">
        <input type="text" name="categoria" placeholder="Categoria da noticia" id="cat" required= "required">
        <textarea name="conteudo" id="cont" cols="30" rows="10" placeholder="conteudo da noticia"  
        required= "required"></textarea>
        <input type="submit" value="enviar" >
    </form>
</div>
<?php if($noticia) :?>
    <div class="box-sucesso">
        <p>noticia salva com sucesso</p>
    </div>
<?php endif;?>
<?php if(!is_null($noticia) AND !$noticia) :?>
    <div class="box-falha">
        <p>erro ao cadastrar noticia <br> Preencha todos os campos</p>
    </div>
<?php endif;?>
<?php require_once 'layout/footer.php';?>