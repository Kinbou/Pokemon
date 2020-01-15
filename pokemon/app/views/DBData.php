<?php

class DBData
{
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function articles()
    {
        return $this->getAllRecords('articles', 'Article');
    }

    public function categories()
    {
        return $this->getAllRecords('categories', 'Category');
    }

    public function authors()
    {
        return $this->getAllRecords('authors', 'Author');
    }

    public function articleById($id)
    {
        return $this->getOneRecord($id, 'articles', 'Article');
    }

    public function authorById($id)
    {
        return $this->getOneRecord($id, 'authors', 'Author');
    }

    public function categoryById($id)
    {
        return $this->getOneRecord($id, 'categories', 'Category');
    }

    private function getAllRecords($tableName, $className)
    {
        return $this->db->query("
          SELECT * FROM $tableName
        ")->fetchAll(PDO::FETCH_CLASS, $className);
    }

    private function getOneRecord($id, $tableName, $className)
    {
        $query = $this->db->query("
          SELECT * FROM $tableName WHERE id = $id
        ");
        $query->setFetchMode(PDO::FETCH_CLASS, $className);
        return $query->fetch();

    }
}