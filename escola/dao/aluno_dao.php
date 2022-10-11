<?php
include_once 'utl/conexao.php';
include_once 'model/aluno.php';
include_once 'model/curso.php';

class AlunoDAO {
    public function list() {
        $sql = "SELECT a.idAluno, a.nomeAluno, a.idade, a.estrangeiro, c.nome AS nome_curso FROM alunos a INNER JOIN cursos c ON a.curso_id = c.id";
        $result = mysql_query($sql);
        $lista = array();
        while($reg = mysql_fetch_assoc($result)) {
            $curso = new Curso($reg["curso_id"], $reg["nome_curso"]);
            $aluno = new Aluno($reg["idAluno"], $reg["nomeAluno "], $reg["idade "], $reg["estrangeiro "], $curso);
            $lista[] = $aluno;
        }
        return $lista;
    }
}
?>
