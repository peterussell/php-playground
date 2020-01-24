<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct(PDO $pdo) {
      $this->pdo = $pdo;
  }

  public function selectAll($table) {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters) {
    try {
      $sql = sprintf(
        'insert into %s (%s) values (%s)',
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))// placeholders have a colon before them
      );

      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (Exception $e) {
      die('Whoops, someting went wrong.');
    }

  }

  // public function insertName($name) {
  //   $statement = $this->pdo
  //     ->prepare("insert into names (name) values ('{$name}');");
  //   $statement->execute([$name]);
  // }
}
