<?php
/*1. implemente uma classe de acesso ao banco de dados (DAO) para a classe Aluno como o método
list(). Lembrando que tal classe deve estar no diretório dao da aplicação.
Dicas:
- O atributo $curso da classe Aluno deve ser um objeto do tipo Curso. Assim, será
necessário instanciar um objeto deste tipo (com seu ID e Nome) antes de atribuí-lo para o
objeto do tipo Aluno.
- Para trazer a informação do nome do curso, deve-se fazer um JOIN entre as tabelas
alunos e cursos no SQL. Defina um alias para o campo referente ao nome do curso, pois o
termo nome já está sendo utilizado pelo nome do aluno. Exemplo:
$reg[“nome”] (acessa o nome do aluno)
$reg[“nome_curso”] (poderia ser utilizado para acessar o nome do curso)
- Por fim, os atributos do objeto Aluno podem ser setados um a um por meio dos métodos
SET. Caso deseje, também é possível criar um construtor para setá-los quando o mesmo for
instanciado.
*/ 

include_once 'utl/conexao.php';
include_once 'model/aluno.php';
include_once 'model/curso.php';

class AlunoDAO {
    public function list() {
        $sql = "SELECT a.id, a.nome, a.email, a.curso_id, c.nome AS nome_curso FROM alunos a INNER JOIN cursos c ON a.curso_id = c.id";
        $result = mysql_query($sql);
        $lista = array();
        while($reg = mysql_fetch_assoc($result)) {
            $curso = new Curso($reg["curso_id"], $reg["nome_curso"]);
            $aluno = new Aluno($reg["id"], $reg["nome"], $reg["email"], $curso);
            $lista[] = $aluno;
        }
        return $lista;
    }
}

?>