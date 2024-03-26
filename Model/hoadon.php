<?php
class hoadon
{
    // phương thức insertHoaDon
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format("Y-m-d"); // Định dạng ngày theo Y-n-d
        $query = "INSERT INTO hoadon(makh, ngaydat, tongtien) VALUES ($makh, '$ngay', 0)";
        $db->exec($query);

        // Lấy masohd vừa được sinh ra
        $sohd = $db->getLastInsertId(); // Sử dụng phương thức getLastInsertId()
        return $sohd;
    }



    // phương thức insertCTHoaDon
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $size, $topping, $thanhtien)
    {
        $db = new connect();
        $toppingString = implode(", ", $topping);
        $query = "INSERT INTO cthoadon (masohd, mahh, soluongmua, sized, topping, thanhtien) 
                  VALUES ($masohd, $mahh, $soluongmua, '$size', '$toppingString', $thanhtien)";
        $db->exec($query);
    }


    // phương thức updateHoaDon
    function updateHoaDon($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien = $tongtien WHERE masohd = $masohd and makh = $makh";
        $db->exec($query);
    }

    function getKhachHangHD($masohd) {
        $db = new connect();
        $select = "SELECT a.masohd, b.tenkh, b.diachi, b.sodienthoai, a.ngaydat FROM hoadon a, khachhang b WHERE a.makh=b.makh AND masohd=$masohd";
        $result = $db->executeQuery($select);
        return $result;
    }
    function getHangHoaHD($masohd)
    {
        $db = new connect();
        $select = "select DISTINCT a.masohd, c.tenhh,a.sized, a.topping ,b.dongia, a.soluongmua from cthoadon a, cthanghoa b, hanghoa c where a.mahh=b.idhanghoa and c.mahh= b.idhanghoa and a.masohd=$masohd";
        $result = $db->getList($select);
        return $result;
    }
}
