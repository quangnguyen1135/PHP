<?php
class cthanghoa
{
    function insertCTHangHoa($mahh, $idloai, $dongia, $hinh, $giamgia)
    {
        $db = new connect();
        $query = "insert into cthanghoa (idhanghoa,idloai,dongia,hinh,giamgia) values ($mahh,$idloai,$dongia,'$hinh',$giamgia)";
        $result = $db->exec($query);
        return $result;
    } 
}
