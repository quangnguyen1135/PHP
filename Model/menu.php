<?php
class menu{
    function getMenu(){
        $db = new connect();
        $select = "select tenloai from loai";
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }
}

?>