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

    function getHangHoaCT()
    {
        $db = new connect();
        $select = "select a.idhanghoa, a.idloai, a.dongia, a.hinh, a.giamgia, b.tenhh from cthanghoa a, hanghoa b where a.idhanghoa=b.mahh";
        $result = $db->getList($select);
        return $result;
    }

    function updateHangHoaCT($mahh, $maloai, $dongia, $hinh, $giamgia)
    {
        $db = new connect();
        $query = "update cthanghoa set idloai=$maloai, dongia=$dongia,hinh='$hinh', giamgia=$giamgia where idhanghoa=$mahh";
        $result = $db->exec($query);
        return $result;
    }

    function deleteHangHoaCT($id)
    {
        $db = new connect();
        $query = "DELETE cthanghoa, hanghoa
        FROM cthanghoa
        JOIN hanghoa ON cthanghoa.idhanghoa = hanghoa.mahh
        WHERE cthanghoa.idhanghoa = $id AND hanghoa.mahh = $id;
        ";
        $result = $db->exec($query);
        return $result;
    }

    function getCTHangHoaPage($start, $limit)
    {
        $db = new connect();
        $select = "select * from cthanghoa ORDER by idhanghoa limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getTopping()
    {
        $db = new connect();
        $select = "select * from topping";
        $result = $db->getList($select);
        return $result;
    }

    function insertCTTopping($idtopping, $idhanghoa)
    {
        $db = new connect();
        $query = "INSERT INTO cttopping (id_topping, id_hanghoa) VALUES ($idtopping, $idhanghoa)";
        $result = $db->exec($query);
        return $result;
    }
    
}
