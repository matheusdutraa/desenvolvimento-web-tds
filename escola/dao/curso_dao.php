<?php
# Classe DAO para o model de curso

include_once("utl/conexao.php");
include_once("model/curso.php");

class CursoDAO{

    public function list(){
        //Função que retorna a conexão PDO com o banco
        $conn = conectar_db();
        $sql = "SELECT * FROM cursos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $reg):
            $curso =
                new Curso($reg['id_curso'], $reg['nome']);
            array_push($cursos, $curso);
        endforeach;

        return $cursos;
    }

}

?>