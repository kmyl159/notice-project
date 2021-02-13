<?php require_once 'classes/noticia.php';?>

<div class="form-container">

    <form method="POST" class="formulario-box">
        <h1></h1>
        
        <input hidden name="id" value="<?php echo $render['id']?>">

        <input type="text" name="titulo" placeholder="Titulo da noticia"  
        required="required" value="<?php echo $render['titulo']?>">
        
        <input type="text" name="categoria" placeholder="Categoria da noticia"
          required= "required" value="<?php echo $render['categoria']?>">
          
        <textarea   name="conteudo" cols="30"
        rows="10" placeholder="conteudo da noticia"
        ><?php echo $render['conteudo']?></textarea>

        <a href="../noticiaphp/index.php"> Voltar</a>
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


