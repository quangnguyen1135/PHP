<?php
class hanghoa
{
    // phương thức hiên thị sản phẩm new
    function getHangHoaLoai()
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "select a.idloai,a.tenloai from loai a";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }
    function getHangHoaSale()
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "select a.mahh,a.tenhh,a.soluotxem,a.hinh,b.dongia,c.mausac,a.giamgia from hanghoa a,cthanghoa b, mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and a.giamgia!=0 ORDER by a.mahh DESC LIMIT 4;";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }

    function getHangHoaAll()
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, a.soluotxem,b.dongia,b.hinh from hanghoa a, cthanghoa b WHERE a.mahh=b.idhanghoa ORDER by a.mahh DESC";
        // ai thực hiện câu select?query, mà query nằm trong pt getlist, mà getlist là pt thuộc về connect
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaAllSale()
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, a.soluotxem,b.dongia,a.hinh,c.mausac, a.giamgia from hanghoa a, cthanghoa b, mausac c WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau and a.giamgia!=0 ORDER by a.mahh DESC";
        // ai thực hiện câu select?query, mà query nằm trong pt getlist, mà getlist là pt thuộc về connect
        $result = $db->getList($select);
        return $result;
    }

    // lay thong tin cua sp thong qua id

    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.mahh,a.tenhh,b.dongia, b.hinh from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa and a.mahh=$id";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaSize($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.idsize,b.size from cthanghoa a, sized b where a.idsize=b.idsize and a.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "SELECT a.hinh from cthanghoa a where a.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaSized($id)
    {
        $db = new connect();
        $select = "SELECT b.size from sized b, cthanghoa a where a.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }
    // function getHangHoaSized($id)
    // {
    //     $db = new connect();
    //     $select = "SELECT DISTINCT  a.size, b.size from cthanghoa a, sized b where a.idsize=b.size and a.idhanghoa=$id";
    //     $result = $db->getList($select);
    //     return $result;
    // }
    
    function getHangHoaTopping($id)
    {
        $db = new connect();
        $select = "SELECT a.id_topping, a.id_hanghoa, b.tentp, b.gia FROM cttopping a JOIN topping b ON a.id_topping = b.id_topping WHERE id_hanghoa = $id";
        $result = $db->getList($select);
        return $result;
    }
    
    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "select a.mahh, a.tenhh, a.soluotxem,b.dongia,b.hinh from hanghoa a, cthanghoa b WHERE a.mahh=b.idhanghoa ORDER by a.mahh limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaTheoLoai($maloai, $start, $limit)
    {
        $db = new connect();
        $select = "SELECT a.mahh, a.tenhh, a.soluotxem, b.dongia, b.hinh 
                  FROM hanghoa a
                  JOIN cthanghoa b ON a.mahh = b.idhanghoa
                  WHERE b.idloai = $maloai
                  ORDER BY a.mahh
                  LIMIT $start, $limit";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaTheoLoaiCount($maloai)
    {
        $db = new connect();
        $query = "SELECT COUNT(*) as total FROM cthanghoa WHERE idloai = $maloai";
        $result = $db->getInstance($query);
        return $result['total'];
    }

    function findPageLoai($count, $limit, $maloai = null)
    {
        if ($maloai) {
            $total = $this->getHangHoaTheoLoaiCount($maloai);
        } else {
            $total = $count;
        }

        $page = ceil($total / $limit);
        return $page;
    }

    function timkiemSanPham($tenhh)
    {
        $db = new connect();
        $select = "SELECT a.mahh, a.tenhh, a.soluotxem, b.dongia, b.hinh FROM hanghoa a, cthanghoa b WHERE a.mahh = b.idhanghoa AND a.tenhh LIKE '%$tenhh%' ORDER BY a.mahh";
        $result = $db->getList($select);
        return $result;
    }

    function getToppingPrice($toppingId) {
        $db = new connect();
        $select = "SELECT gia FROM topping WHERE id_topping = $toppingId";
        $result = $db->getInstance($select);
        return $result['gia'];
    }
}
