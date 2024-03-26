<?php
function uploadImage()
{
   
    // thư mục lưu trữ hình lấy về 
    $target_dir="../../Duan/Content/image/";
    // hình lưu trữ tạm trên server(name: lưu đường dẫn với tên giống tên hình)
   // $_FILES [name],tmp_name,size,error
    $target_file=$target_dir.basename($_FILES['image']['name']);
    // lấy phần mở rộng của hình ra để kiểm tra nó có phải là hình hay không
    $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // kiểm tra hình có thật sự được upload lên server hay không
    $upload=1;
    if(isset($_POST['submit']))
    {
        // hình đc up lên thì sẽ có size
        $check=getimagesize($_FILES['image']['tmp_name']);
        // $check=$_FILES['image']['size']
        if($check!==false)
        {
            $upload=1;
        }
        else
        {
            $upload=0;
        }
    }
    //kiểm tra xem hình đó có tồn tại hay chưa
    if(file_exists($target_file))
    {
        echo "<script> alert('hình đã tồn tại')</script>";
        $upload=0;
    }
    // kiểm tra hình có vượt quá dung lượng hay không
    // cho hình tối đa là 500kb=500000b
    if($_FILES['image']['size']>500000)
    {
        echo "<script> alert('hình vượt quá dung lượng')</script>";
        $upload=0;
    }
    // kiểm tra hình có đúng là  .jpg,gif, png..
    if($imagefileType!="jpg" && $imagefileType!=="jepg" && $imagefileType!=="png" && $imagefileType!=="gif")
    {
        $upload=0;
        echo '<script> alert("ko phải là hình")</script>';
    }
    // upload hình
    if($upload==1)
    {
       
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
        {
            echo '<script> alert("Upload hình thành công")</script>';
        }
        else
        {
            echo '<script> alert("Upload hình ko thành công")</script>';
        }
    }

}
