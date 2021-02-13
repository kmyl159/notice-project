<?php 
    require_once 'layout/header.php';

    $n = new Noticia;

    $filtrar = null;
    
   $filtrar = filter_input(INPUT_GET,'filtrar',FILTER_SANITIZE_STRING);

    $noticias = $n->retornarNoticias($filtrar);
?>

<div class="container">
    <?php if(isset($noticias)) :?>
        <?php foreach ($noticias as $noticia):?>
            <div class="box-noticia">
                <h3><?php echo $noticia['titulo'];?></h3>
                <h4><?php echo $noticia['categoria'];?></h4>
                <p><?php echo $noticia['conteudo'];?></p>
                <a href="<?php echo '/noticiaphp/box.php?id='.$noticia['id']?>" 
                name="acessar">Editar</a>
            </div>
        <?php endforeach;?>
    <?php else :?>
        <h1 class="nenhuma">Nenhuma noticia encontrada.</h1>
    <?php endif;?>
</div>

<?php require_once 'layout/footer.php';?>