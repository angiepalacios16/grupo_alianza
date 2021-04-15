<?php
include_once ( __DIR__ . "\connection_database.php");
class Employee {
  public static function insert_employee($user){
    try {
      Connection::initialize();
      $query = Connection::getInstance()->prepare('INSERT INTO employee (id, name, last_name, identification, direction, phone, city_birth_id, position_id, country_birth_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

      $query->execute([
        self::count() + 1,
        $user['name'],
        $user['last_name'],
        $user['identification'],
        $user['direction'],
        $user['phone'],
        $user['city_birth_id'],
        $user['position_id'],
        $user['country_birth_id']
      ]);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
  }
  public static function show_employee($user){
    try {
      Connection::initialize();
      $sql = 'SELECT * FROM employee WHERE id = ' . $user['id'];
      $pdo = Connection::getInstance();
      $stm = $pdo->prepare( $sql );
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      return $result;

    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public static function update_employee($user){
    try {
      Connection::initialize();
      $query = Connection::getInstance() -> prepare('UPDATE employee SET name = ?, last_name = ?, identification = ?, direction = ?, phone = ?, city_birth_id = ?, position_id = ?, country_birth_id = ? WHERE id = ' . $user['id']);
      $query -> execute([
        $user['name'],
        $user['last_name'],
        $user['identification'],
        $user['direction'],
        $user['phone'],
        $user['city_birth_id'],
        $user['position_id'],
        $user['country_birth_id']
      ]);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public static function count() {
    try {
      Connection::initialize();
      $query = Connection::getInstance()->prepare(
        'SELECT COUNT(*) total FROM employee'
      );
      $query->execute();
      return $query->fetchColumn();
    } catch (PDOException $e) {
      echo "error en count";
      die($e->getMessage());
    }
  }
  public static function delect_employee($user) {
    try {
      Connection::initialize();
      $sql = 'DELETE FROM employee WHERE id = ' . $user['id'];
      $pdo = Connection::getInstance();
      $stm = $pdo->prepare( $sql );
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      return $result;

    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
?>