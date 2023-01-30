<?php

    class Entity extends Conexao{

        //Listar
        public function list($table)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table ORDER BY idAluno ASC";

            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listRequisicao($table)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table ORDER BY id ASC";

            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listMatricula($table)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table ORDER BY idMatricula ASC";

            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listById($table, $id)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE idAluno = $id";

            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listByMatricula($matricula)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM aluno a, requisicao r WHERE a.idAluno = r.id_aluno and a.matricula = $matricula";


            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listByCodigo($codigo)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM maticula m WHERE m.numero = $codigo";


            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function getByMatricula($matricula)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM aluno a WHERE a.matricula = $matricula";


            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function getAnalisado()
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM requisicao r WHERE r.aprovacao = 't'";


            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function listAnalisado()
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM aluno a, requisicao r WHERE a.idAluno = r.id_aluno and a.analisado = 'n'";


            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        //INSERT
        public function insert($table,$data)
        {
            $pdo = parent::getInstance();
            $fields = implode(", ",array_keys($data));
            $values = ":".implode(", :",array_keys($data));

            $sql="INSERT INTO $table($fields) VALUES ($values)";
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key",$value,PDO::PARAM_STR);
            }

            $statement->execute();

        }


        public function delete($table,$id)
        {
            $pdo = parent::getInstance();
            $sql = "DELETE FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id",$id);
            $statement->execute();
        }

        public function getInfo($table,$id)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id",$id);
            $statement->execute();

            return $statement->fetchAll();
        }


        public function update($table,$data,$id)
        {
            $pdo = parent::getInstance();
            $new_values = "";
            foreach($data as $key => $value)
            {
                $new_values .= "$key=:$key, ";
            }
            $new_values = substr($new_values,0,-2);
            $sql = "UPDATE $table SET $new_values WHERE id = :id";
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value)
            {
                $statement->bindValue(":$key",$value,PDO::PARAM_STR);
            }
            $statement->bindValue(":id",$id);
            $statement->execute();
        }


    
    }

?>