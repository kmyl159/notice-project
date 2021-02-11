<?php 

require_once 'config.php';

class Noticia {

    public function retornarNoticias($filtrar){
        try {
            global $pdo;
    
            $sql = "SELECT
                    n.id AS id,
                    n.titulo AS titulo,
                    n.categoria AS categoria,
                    n.conteudo AS conteudo
                    FROM mysqldb.noticia n
                    ORDER BY n.id DESC";
    
            if(!empty($filtrar)){
                $sql .= "WHERE n.titulo LIKE ? OR n.categoria LIKE ?";
                $sql = $pdo->prepare($sql);
                $sql->bindValue(1, "%$filtrar%");
                $sql->bindValue(2, "%$filtrar%");
                $sql->execute();
            }else{
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
    }

    public function cadastrarNoticia($titulo,$categoria,$conteudo){
        try {
           global $pdo;
           

            $sql = "INSERT INTO mysqldb.noticia (titulo,categoria,conteudo)
                    VALUES(:titulo,:categoria,:conteudo)";
            $sql = $pdo->prepare($sql);
            $sql->bindvalue(':titulo',$titulo);
            $sql->bindvalue(':categoria',$categoria);
            $sql->bindvalue(':conteudo',$conteudo); 
            $sql->execute();

        } catch (PDOException $e) {
            echo "Erro ao cadastrar noticia : ". $e->getMessage();
            exit;
        }
    }
}
?>