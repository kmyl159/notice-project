<?php   
    require_once 'layout/header.php';
        
    global $pdo;
    
    $n = new Noticia();
    $cadastro = null;
         
    $cadastro = $n->cadastrarNoticia();
    
    if(!isset($render)){
        $render['titulo'] = '';
        $render['categoria'] = '';
        $render['conteudo'] = '';
        $render['id'] = '';
      }

?>
<?php require_once 'layout/form.php'?>
<?php require_once 'layout/footer.php';?>