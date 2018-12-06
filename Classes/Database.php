<?php

class Database
{
    public $sqlite = null;
    
    public function __construct()
    {
        if ($this->sqlite == null)
        {
            try
            {
                $this->sqlite = new PDO('sqlite:blog.db');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            $this->sqlite->exec('CREATE TABLE posts (
                id INTEGER PRIMARY KEY,
                title TEXT,
                img TEXT,
                content TEXT,
                date TEXT
            )');
        }
    }
}