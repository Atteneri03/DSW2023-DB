<?php

// echo "Creo 4 usuarios: <br>";
// create("Eddard","Stark","254658745","eddardstark@gmail.com");
// create("Sansa","Stark","352627894","sansastark@gmail.com");
// create("Jon","Snow","637028936","jonsnow@gmail.com");
// create("Daenerys","Targaryen","647382756","daenerys@gmail.com");

// echo "<br>Busco al usuario con el id = 2<br>";
// find(2);

echo "<br>Elimino al usuario con el id = 18<br>";
delete(18);

function getUsuarios(){
    require "connection.php";
    $stmt = $link->query('SELECT * FROM users');
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($usuarios);
}

function create($name,$surname,$tel,$email){
    require "connection.php";
    try{
        $stmt = $link->query("SELECT * FROM users WHERE name=$name");
        if($stmt){
            $stmt = $link->prepare("INSERT INTO `users` (`name`, `surname`, `tel`, `email`) VALUES ('$name', '$surname', '$tel', '$email')");
            $stmt->execute();
            echo "Usuario insertado";
        }
        
    } catch (PDOException $e){
        echo "Error al insertar usuario: " . $e->getMessage();
    }
}

function find($id) {
    require "connection.php";
    try{
        $stmt = $link->query("SELECT * FROM users WHERE id=$id");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Usuario encontrado: ";
        print_r($user);
        } catch (PDOException $e){
        echo "No se ha encontrado al usuario con el id: $id " . $e->getMessage();
    }
}

function delete($id) {
    require "connection.php";
    try{
        $stmt = $link->prepare("DELETE FROM users WHERE id=$id");
        echo "Usuario eliminado";
        getUsuarios();
        } catch (PDOException $e){
        echo "No se ha encontrado al usuario con el id: $id " . $e->getMessage();
    }
}


