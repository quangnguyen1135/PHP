<?php
class user
{
    function insertKhachHang($tenkh, $username, $matkhau, $email, $diachi, $sodt)
    {
        $db = new connect();
        $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh','$username','$matkhau','$email','$diachi','$sodt')";
        $result = $db->exec($query);
        return $result;
    }

    function checkKhachHang($user, $email)
    {
        $db = new PDO("mysql:host=localhost;dbname=gongcha1", "root", "123");
        $select = "SELECT * FROM khachhang WHERE username = :user OR email = :email";
        $stmt = $db->prepare($select);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function logKhachhang($user, $pass)
    {
        $db = new PDO("mysql:host=localhost;dbname=gongcha1", "root", "123");
        $select = "SELECT * FROM khachhang WHERE username = '$user' and matkhau= '$pass'";
        $stmt = $db->prepare($select);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function checkEmail($email)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang a WHERE email='$email'";
        $result = $db->getList($select);
        return $result;
    }

    function updateEmailPass($emailold, $passnew)
    {
        $db = new connect();
        $query = "update khachhang set matkhau='$passnew' where email='$emailold'";
        echo $query;
        $db->exec($query);
    }
}
