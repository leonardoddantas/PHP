<?php

class Book 
{
    protected static $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn = $connection;
    }

    public function save (string $title, int $user) {
        
        $query = 'INSERT into books (title, user) '
         . 'values (:title, :user)';
        $sttm = $this->conn->prepare($query);
        $sttm->bindValue(':title', $title);
        $sttm->bindValue(':user', $user);

        $result = $sttm->execute();

        return $result;
    }

    public static function all () {

        $db_conn = self::$conn ?? connection();

        $result = $db_conn->query('SELECT * FROM books');

        $book_list = array();
        while ($book = $result->fetchArray()) {
            array_push($book_list, [
                'title' => $book['title'],
                'user' => $book['user'],
            ]);
        }
        return $book_list;
    }

    


}
