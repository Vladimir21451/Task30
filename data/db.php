<?php
/**

 * @return PDO

 */

function get_connection()
{
    $conn = new mysqli("localhost", "root", "root","testtable");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    echo "Подключение успешно установлено";
   // var_dump($conn);
    return $conn;
  // $conn->close(); 
}



function insert(array $data)
{
    $query = 'INSERT INTO users (name, email, password, created_at) VALUES(?, ?, ?, ?)';
    $db = get_connection();
    $stmt = $db->prepare($query);
    return $stmt->execute($data);
}

function getUserByEmail(string $email)
{
    $query = 'SELECT * FROM users WHERE email = ?';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result;
    }
    return false;
}

function getUsersList()
{
    $query = 'SELECT * FROM users ORDER BY id DESC';
    $db = get_connection();
    //var_dump($db);
    if($query){
    //return $db->query($query,PDO::FETCH_ASSOC);
    return mysqli_query($db, $query);
}
}