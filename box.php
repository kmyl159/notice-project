<?php require_once 'classes/noticia.php';?>
<?php 

$n = new Noticia;
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$render = null;
$cadastro = null;

$render = $n ->retornarNoticiaId($id);
$cadastro = $n->editarNoticia($id);
$render = $n ->retornarNoticiaId($id);

if(!isset($render)){
  $render['titulo'] = '';
  $render['categoria'] = '';
  $render['conteudo'] = '';
  $render['id'] = '';
}

        require_once 'layout/header.php';
        require_once 'layout/form.php';
        require_once 'layout/footer.php';
?>