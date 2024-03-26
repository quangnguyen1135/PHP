<?php
$act="hanghoa";
if(isset($_GET['act']))
{
    $act=$_GET['act'];

}
switch ($act) {
    case 'hanghoa':
        include_once "./View/hanghoa.php";
        break;
    
    case 'add_hanghoa':
        include_once "./View/edithanghoa.php";
        break;

    case 'ct_hanghoa':
        include_once "./View/cthanghoa.php";
        break;

case 'insert_action':
    // kiểm tra và nhận thông tin
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $tenhh=$_POST['tenhh'];
        $maloai=$_POST['maloai'];
        $dacbiet=$_POST['dacbiet'];
        $slx=$_POST['slx'];
        $ngaylap=$_POST['ngaylap'];
        $mota=$_POST['mota'];
        
        // dem thông tin insert vào database
        $hh=new hanghoa();
        $check=$hh->insertHangHoa($tenhh, $maloai, $dacbiet, $slx, $ngaylap, $mota);
        if($check!==false)
        {
            echo '<script> alert("Thêm dữ liệu thành công")</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
        }
        else
        {
            echo '<script> alert("Thêm dữ liệu không thành công")</script>';
        }

    }
    break;

    case 'update_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case "update_action":
        // nhận thông tin
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $mahh=$_POST['mahh'];
            $tenhh=$_POST['tenhh'];
            $maloai=$_POST['maloai'];
            $dacbiet=$_POST['dacbiet'];
            $slx=$_POST['slx'];
            $ngaylap=$_POST['ngaylap'];
            $mota=$_POST['mota'];
            // dem thông tin update vao database
            $hh=new hanghoa();
            $kt=$hh->updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota);
            if($kt!==false)
            {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
            }
            else
            {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
        case "del_hanghoa":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $hh = new hanghoa();
                $kt = $hh->deleteHangHoa($id);
                if($kt !== false) {
                    echo '<script> alert("Xóa dữ liệu thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                } else {
                    echo '<script> alert("Xóa dữ liệu không thành công")</script>';
                }
            }
            break;
        
}

?>