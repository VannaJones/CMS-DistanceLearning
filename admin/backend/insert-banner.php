<?php
   include ('../../dbconnect/connection.php');
   
// Add Home Banner Image
if($_GET['action']=='add-banner'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);


    $file_name = $_FILES['hb_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['hb_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into home_banner(img)values ('$destination_name');");

    mysqli_query($con, "alter table home_banner AUTO_INCREMENT = 1");
    
    header("location:../home_banner.php");
}
// Add About Header Image
if($_GET['action']=='add-aboutheader'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);


    $file_name = $_FILES['about_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['about_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into about_header(about_img)values ('$destination_name');");

    mysqli_query($con, "alter table about_header AUTO_INCREMENT = 1");
    
    header("location:../about_header.php");
}
// Add Admissions Header Image
if($_GET['action']=='add-admheader'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $adm_header_title = $_POST['adm_header_title'];

    
    $file_name = $_FILES['adm_header_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['adm_header_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into adm_header(adm_header_img, adm_header_title)values ('$destination_name', '$adm_header_title');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table adm_header AUTO_INCREMENT = 1");
    
    header("location:../adm_header.php");
}

// Add Academics Header Image
if($_GET['action']=='add-acadheader'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_header_title = $_POST['acad_header_title'];

    
    $file_name = $_FILES['acad_header_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_header_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into acad_header(acad_header_img, acad_header_title)values ('$destination_name', '$acad_header_title');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_header AUTO_INCREMENT = 1");
    
    header("location:../acad_header.php");
}
// Add Contacts Header Image
if($_GET['action']=='add-contheader'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);


    $file_name = $_FILES['cont_header_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['cont_header_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into cont_header(cont_header_img)values ('$destination_name');");

    mysqli_query($con, "alter table cont_header AUTO_INCREMENT = 1");
    
    header("location:../cont_wmsu.php");
}
// Add Downloadable Files in Education
if($_GET['action']=='add-edufile'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_edu3_filename = $_POST['acad_edu3_filename'];

    $file_name = $_FILES['acad_edu3_file']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_edu3_file']['tmp_name'],$destination);

    mysqli_query($con, "insert into acad_edu3(acad_edu3_file, acad_edu3_filename)values ('$destination_name', '$acad_edu3_filename');");

    mysqli_query($con, "alter table acad_edu3 AUTO_INCREMENT = 1");
    
    header("location:../acad_education.php");
}
// Add Downloadable Files in Nursing
if($_GET['action']=='add-nurfile'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_nur3_filename = $_POST['acad_nur3_filename'];

    $file_name = $_FILES['acad_nur3_file']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_nur3_file']['tmp_name'],$destination);

    mysqli_query($con, "insert into acad_nur3(acad_nur3_file, acad_nur3_filename)values ('$destination_name', '$acad_nur3_filename');");

    mysqli_query($con, "alter table acad_nur3 AUTO_INCREMENT = 1");
    
    header("location:../acad_nursing.php");
}
?>