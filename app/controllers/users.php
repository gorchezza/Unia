<?php
include("app/database/db.php");
// include("app/validations/errors.php");
$errForma = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['email'])){
        $first_name = trim($_POST['first-name']);
        $second_name = trim($_POST['second-name']);
        $three_name =  trim($_POST['three-name']);
        $id_passport =  trim($_POST['id-pass']);
        $issued =  trim($_POST['issued']);
        $register_date =  trim($_POST['reg-date']);
        $brith_date	=  trim($_POST['brith-date']);
        $brith_place = trim($_POST['brith-place']);
        $resident_place =  trim($_POST['resident-place']);
        $email = trim($_POST['email']);
        $pass = trim(password_hash($_POST['password'], PASSWORD_DEFAULT));


        // if (mb_strlen($first_name) < 2){
        //     $errForma = 'Имя меньше двух символов!';
        // }elseif(mb_strlen($first_name) > 32){
        //     $errForma = 'Имя больше допустимой длинны!';
        // }else{
        //     $errForma = '';
        // }
        
        // if (mb_strlen($second_name) < 2){
        //     $errForma = 'Фамилия двух символов!';
        // }elseif(mb_strlen($second_name) > 32){
        //     $errForma = 'Фамилия больше допустимой длинны!';
        // }else{
        //     $errForma = '';
        // }
        
        // if (mb_strlen($three_name) < 2){
        //     $errForma = 'Отчество меньше двух символов!';
        // }elseif(mb_strlen($three_name) > 32){
        //     $errForma = 'Отчество больше допустимой длинны!';
        // }else{
        //     $errForma = '';
        // }
        
        // if (mb_strlen($id_passport) > 10){
        //     $errForma = 'Серия и номер не должны превышать 10 симоволов, напишите их без пробела';
        // }elseif (mb_strlen($id_passport) < 10){
        //     $errForma = 'Серия и номер паспорта не должны быть меньше 10 символов, перепровертье!';
        // }

        // if (mb_strlen($register_date) > 10 || mb_strlen($register_date) < 10){
        //     $errForma = 'Дата выдачи должна быть в форме xx.xx.xxxx';
        // }

        // // if (selectOne('passport_data', ['email' => $email])){
        // //     echo
        // // }
    
        $param = [
            'first_name' => $first_name,
            'second_name' => $second_name,
            'three_name' => $three_name,
            'id_passport' => $id_passport,
            'issued' => $issued,
            'register_date' => $register_date,
            'brith_date' => $brith_date,
            'brith_place' => $brith_place,
            'resident_place' => $resident_place,
            'email' => $email,
            'password' => $pass,
        ];

        $exictence = selectOne('passport_data', ['email' => $email]);

        if ($exictence['email'] == $email){
            $errForma = "Пользователь с такой почтой уже зарегистрирован!";
        }else{

            $id = insert('passport_data', $param);
            $user = selectOne('passport_data', ['id' => $id]);
            
            $_SESSION['id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['second_name'] = $user['second_name'];
            $_SESSION['three_name'] = $user['three_name'];
            $_SESSION['id_passport'] = $user['id_passport'];
            $_SESSION['issued'] = $user['issued'];
            $_SESSION['register_date'] = $user['register_date'];
            $_SESSION['brith_date'] = $user['brith_date'];
            $_SESSION['brith_place'] = $user['brith_place'];
            $_SESSION['resident_place'] = $user['resident_place'];
            $_SESSION['email'] = $user['email'];
             
            // tt($_SESSION);
            header('location: ' . BASE_URL . 'lk.php');

        }
    }
}else{
    $first_name = '';
    $second_name = '';
    $three_name =  '';
    $id_passport =  '';
    $issued =  '';
    $register_date =  '';
    $brith_date	=  '';
    $brith_place = '';
    $resident_place =  '';
    $email = '';
// echo 'GET';
}




//     $id = insert('users', $param);
//     $last_row = selectOne('users', ['id' => $id]);
//     tt($last_row);



?>