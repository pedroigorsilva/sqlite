<?php

namespace Pedro\Conexao;

class ConexaoSqlite extends PDO
{
    private $db;

    public function __construct($filename)
    {
        $filename = realpath($filename);
        $this->db = parent::__construct('sqlite:' . $filename);
    }

    public function getDb()
    {
        return $this->db;
    }
}
