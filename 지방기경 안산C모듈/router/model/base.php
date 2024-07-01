<?php
class DB {
    public static $pdo = false;

    public static function mq($sql, $arr = []) {
        if (!self::$pdo) {
            self::$pdo = new PDO("mysql:host=localhost;charset=utf8;dbname=baseball2;", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        $q = self::$pdo->prepare($sql);
        $q->execute(is_array($arr) ? $arr : [$arr]);

        return $q;
    }

    public static function all($sql = '') {
        $table = get_called_class();
        return self::mq("SELECT * FROM $table $sql")->fetchAll();
    }

    public static function find($sql, $arr = []) {
        $table = get_called_class();
        return self::mq("SELECT * FROM $table WHERE $sql", $arr)->fetch();
    }

    public static function findAll($sql, $arr = []) {
        $table = get_called_class();
        return self::mq("SELECT * FROM $table WHERE $sql", $arr)->fetchAll();
    }

    public static function insert($data) {
        $table = get_called_class();
        $sql = implode("` = ?, `", array_keys($data)) . "` = ?";
        self::mq("INSERT INTO $table SET `$sql", array_values($data));
    }

    public static function update($data, $idx, $name = "id") {
        $table = get_called_class();
        $sql = implode(" = ?, ", array_keys($data)) . " = ?";
        self::mq("UPDATE $table SET {$sql} WHERE $name = $idx", array_values($data));
    }

    public static function delete($idx, $name = "id") {
        $table = get_called_class();
        self::mq("DELETE FROM $table WHERE $name = $idx");
    }
}

class user extends DB {}
class reser extends DB {}
class holiday extends DB {}
class goods extends DB {}
class grice extends DB {}
class heart extends DB {}
class basekit extends DB {}
?>
