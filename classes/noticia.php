<?php 

require_once 'config.php';

class Noticia{

    public function retornarNoticias($filtrar){
        try {
            global $pdo;
    
            $sql = "SELECT
                    n.id AS id,
                    n.titulo AS titulo,
                    n.categoria AS categoria,
                    n.conteudo AS conteudo
                    FROM mysqldb.noticia n
                    ";
    
            if(!empty($filtrar)){
                $sql .= "WHERE n.titulo LIKE ? OR n.categoria LIKE ?";
                $sql = $pdo->prepare($sql);
                $sql->bindValue(1, "%$filtrar%");
                $sql->bindValue(2, "%$filtrar%");
                $sql->execute();
            }else{
                $sql .= "ORDER BY n.id DESC";
                $sql = $pdo->query($sql);
            }
            
            if($sql->rowCount() > 0){
                $data = $sql->fetchAll();
                return $data;
            }
            
        } catch (PDOException $e) {
           echo "Erro ao retornar noticias: " . $e->getMessage();
           exit;
        } 
    } /* OK */

    public function retornarNoticiaId($id){
        try {
            global $pdo;

            $sql = "SELECT *
                    FROM mysqldb.noticia n
                    WHERE id ='$id'";

            $sql = $pdo->query($sql);

            $data = $sql->fetch();

            if(isset($data)){
                return $data;
            }
            
        } catch (PDOException $e) {
           echo "Erro ao retornar noticias: " . $e->getMessage();
           exit;
        } 
    } /* OK */

    public function cadastrarNoticia(){
        try {
            global $pdo;
            
            $submit = filter_input(INPUT_POST,'cadastrar',FILTER_SANITIZE_STRING);

            if($submit){
                $titulo = addslashes(filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_STRING));
                $categoria = addslashes(filter_input(INPUT_POST,'categoria',FILTER_SANITIZE_STRING));
                $conteudo = addslashes(filter_input(INPUT_POST,'conteudo',FILTER_SANITIZE_STRING));
                
                if((!empty($titulo)) AND (!empty($categoria)) AND (!empty($conteudo))){
                    $existente = "SELECT
                            n.id AS id,
                            n.titulo AS titulo,
                            n.categoria AS categoria,
                            n.conteudo AS conteudo
                            FROM mysqldb.noticia n
                            WHERE titulo = '$titulo'
                            OR conteudo = '$conteudo'
                            ";
                    $existente = $pdo->query($existente);

                    $result = $existente->fetch();
                  
                    if($result){
                       return 'existente';
                        
                    }else{
                        $sql = "INSERT INTO mysqldb.noticia (titulo,categoria,conteudo)
                                VALUES(:titulo,:categoria,:conteudo)";
                        $sql = $pdo->prepare($sql);
                        $sql->bindvalue(':titulo',$titulo);
                        $sql->bindvalue(':categoria',$categoria);
                        $sql->bindvalue(':conteudo',$conteudo); 
                        $sql->execute();
                        return "sucesso";
                        
                    }
                }else{
                   return 'falha';
                }
            }
        } catch (PDOException $e) {
            echo "Erro ao cadastrar noticia : ". $e->getMessage();
            exit;
        }
    } /* OK */

    public function editarNoticia($id){
        try{
           global $pdo;
            
           $submit = filter_input(INPUT_POST,'editar',FILTER_SANITIZE_STRING);

           if($submit){
               $id = addslashes(filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT));
               $titulo = addslashes(filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_STRING));
               $categoria = addslashes(filter_input(INPUT_POST,'categoria',FILTER_SANITIZE_STRING));
               $conteudo = addslashes(filter_input(INPUT_POST,'conteudo',FILTER_SANITIZE_STRING));
               
               if((!empty($titulo)) AND (!empty($categoria)) AND (!empty($conteudo))){

                $sql = "UPDATE mysqldb.noticia
                        SET titulo = :titulo,
                        categoria = :categoria,
                        conteudo = :conteudo
                        WHERE id = '$id'";

                $sql = $pdo->prepare($sql);
                $sql->bindvalue(':titulo',$titulo);
                $sql->bindvalue(':categoria',$categoria);
                $sql->bindvalue(':conteudo',$conteudo); 
                $sql->execute();
                return 'sucesso';

               }else{
                   return 'falha';
               }
            
            }return false;  

        }catch(PDOException $e){
            echo 'erro ao editar noticia:' .$e->getMessage();
            exit;
        }
    } /* OK */

}
?>