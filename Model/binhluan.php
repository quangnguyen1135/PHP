<?php

    class binhluan{
        function insertComment($idkh, $idhh, $content){
            $db = new connect();
            $query = "INSERT INTO comment(idcomment, idkh, idhanghoa, content, luotthich) values (null, $idkh, $idhh,$content,0)";
            $db-> exec($query);
        }
        // hien thi tat ca cac binh luan

        function selectBinhLuan($idhh){
            $db = new connect();
            $select = "SELECT a.username , b.content from khachhang a, comment b where a.makh=b.idkh and b.idhanghoa=$idhh";
            $result = $db -> getList($select);
            return $result;
        }
    }