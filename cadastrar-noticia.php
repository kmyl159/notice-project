<?php   
        require_once 'layout/header.php';
        require_once 'classes/noticia.php';
        
    global $pdo;
    
    $n = new Noticia();
    $cadastro = null;
         
    $cadastro = $n->cadastrarNoticia($cadastro);
   
?>

    <?php require_once 'layout/form.php'?>
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