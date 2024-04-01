<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select mahh, tenhh, ngaylap from hanghoa";
        $result = $db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "insert into hanghoa(mahh,tenhh,soluotxem,ngaylap,mota) 
        values (Null, '$tenhh', $slx, '$ngaylap', '$mota')";
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
    function getHangHoaCT_ID($id)
    {
        $db = new connect();
        $select = "select a.idhanghoa, a.idloai, a.dongia, a.hinh, a.giamgia, b.tenhh from cthanghoa a, hanghoa b where a.idhanghoa=$id and idhanghoa=mahh";
        $result = $db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh, $tenhh, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "update hanghoa 
        set tenhh='$tenhh',soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";

        $result = $db->exec($query);
        return $result;
    }

    function deleteHangHoa($id)
    {
        $db = new connect();
        $query = "DELETE cthanghoa, hanghoa
        FROM cthanghoa
        JOIN hanghoa ON cthanghoa.idhanghoa = hanghoa.mahh
        WHERE cthanghoa.idhanghoa = $id AND hanghoa.mahh = $id";
        $result = $db->exec($query);
        return $result;
    }

    function getSize()
    {
        $db = new connect();
        $select = "select * from size";
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

    function getHangHoaAllPageA($start, $limit)
    {
        $db = new connect();
        $select = "select mahh, tenhh, ngaylap from hanghoa ORDER by mahh limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
}
