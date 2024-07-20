<?php

class MoviesModel {
    protected $table_name = 'movies';
    protected $columns = ['id', 'title', 'year', 'ranking'];
    protected $pdo;

    public function __construct() {
        $dsn = "pgsql:host=pg-db;port=5432;dbname=pg_db;";
        $this->pdo = new PDO($dsn, "postgres", "password123", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function getData(array $attributes = ['*']): array {
        $columns = array_intersect($attributes, $this->columns);

        if (empty($columns)) {
            $columns = ['*'];
        }

        $columns_str = implode(', ', $columns);

        $sql = "SELECT $columns_str FROM " . $this->table_name;

        $stm = $this->pdo->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}