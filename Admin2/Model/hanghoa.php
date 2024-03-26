<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select mahh, tenhh, maloai, ngaylap from hanghoa";
        $result = $db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh, $maloai, $dacbiet, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "insert into hanghoa(mahh,tenhh,maloai,dacbiet,soluotxem,ngaylap,mota) 
        values (Null, '$tenhh', $maloai, $dacbiet, $slx, '$ngaylap', '$mota')";
        echo $query;
        $result = $db->exec($query);
        return $result;
    }
    function insertTopping($id_hanghoa, $id_topping)
    {
        $db = new connect();
        $query = "insert into cttopping(id_cttp,id_topping,id_hanghoa) 
        values (null, '$id_topping', $id_hanghoa)";

        $result = $db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select * from hanghoa where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh, $tenhh, $maloai, $dacbiet, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";

        $result = $db->exec($query);
        return $result;
    }

    function deleteHangHoa($id)
    {
        $db = new connect();
        $query = "DELETE FROM hanghoa WHERE mahh = $id";
        $result = $db->exec($query);
        return $result;
    }

    function getSize()
    {
        $db=new connect();
        $select="select * from size";
        $result=$db->getList($select);
        return $result; 
    }
    function getTopping()
    {
        $db=new connect();
        $select="select * from topping";
        $result=$db->getList($select);
        return $result;
    }
}
