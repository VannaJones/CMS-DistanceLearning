<?php
   include ('../../dbconnect/connection.php');

$id = $_GET['id'];
// Edit About Mission
if($_GET['action']=='edit-aboutmis'){

    $about_mis_newtitle = $_POST['about_mis_newtitle'];
    $about_mis_newdesc = $_POST['about_mis_newdesc'];

    $sql = "update about_mis set about_mis_title='$about_mis_newtitle', about_mis_desc='$about_mis_newdesc' where about_mis_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_mission.php");
    }else {
        echo "Failed";
    }
}
// Edit About Vision
if($_GET['action']=='edit-aboutvis'){

    $about_vis_newtitle = $_POST['about_vis_newtitle'];
    $about_vis_newdesc = $_POST['about_vis_newdesc'];

    $sql = "update about_vis set about_vis_title='$about_vis_newtitle', about_vis_desc='$about_vis_newdesc' where about_vis_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_vision.php");
    }else {
        echo "Failed";
    }
}
// Edit Home About
if($_GET['action']=='edit-habout'){

    $ha_newtitle = $_POST['ha_newtitle'];
    $ha_newsubtitle = $_POST['ha_newsubtitle'];
    $ha_newdesc = $_POST['ha_newdesc'];


    $sql = "update home_about set ha_title='$ha_newtitle', ha_subtitle='$ha_newsubtitle', ha_desc='$ha_newdesc' where ha_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../home_about.php");
    }else {
        echo "Failed";
    }
}
// Edit Distance Learning
if($_GET['action']=='edit-about_dl_desc'){
    
    
    $about_dl_newtitle = $_POST['about_dl_newtitle'];
    $about_dl_newdesc = $_POST['about_dl_newdesc'];


    $sql = "update about_dldesc set about_dl_title='$about_dl_newtitle', about_dl_desc='$about_dl_newdesc' where about_dl_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_aboutdesc.php");
    }else {
        echo "Failed";
    }
}
// Edit Rationale
if($_GET['action']=='edit-about_rat'){
    
    
    $about_rat_newtitle = $_POST['about_rat_newtitle'];
    $about_rat_newdesc = $_POST['about_rat_newdesc'];


    $sql = "update about_rat set about_rat_title='$about_rat_newtitle', about_rat_desc='$about_rat_newdesc' where about_rat_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_rationale.php");
    }else {
        echo "Failed";
    }
}
// Edit Admission Requirements
if($_GET['action']=='edit-admreq'){
    
    
    $adm_req_newtitle = $_POST['adm_req_newtitle'];
    $adm_req_newcont = $_POST['adm_req_newcont'];


    $sql = "update adm_req set adm_req_title='$adm_req_newtitle', adm_req_cont='$adm_req_newcont' where adm_req_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../adm_req.php");
    }else {
        echo "Failed";
    }
}
// Edit Admission Enrolment Procedures
if($_GET['action']=='edit-admenrol'){
    
    $adm_enr_newtitle = $_POST['adm_enr_newtitle'];
    $adm_enr_newcont = $_POST['adm_enr_newcont'];


    $sql = "update adm_enrol set adm_enr_title='$adm_enr_newtitle', adm_enr_cont='$adm_enr_newcont' where adm_enr_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../adm_enrol.php");
    }else {
        echo "Failed";
    }
}
// Edit Admission Terms and Policy
if($_GET['action']=='edit-admterm'){
    
    $adm_term_newtitle = $_POST['adm_term_newtitle'];
    $adm_term_newcont = $_POST['adm_term_newcont'];


    $sql = "update adm_term set adm_term_title='$adm_term_newtitle', adm_term_cont='$adm_term_newcont' where adm_term_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../adm_term.php");
    }else {
        echo "Failed";
    }
}
// Edit Academics Education Table 1
if($_GET['action']=='edit-acadedu1'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_edu1_newtitle = $_POST['acad_edu1_newtitle'];
    $acad_edu1_newdesc = $_POST['acad_edu1_newdesc'];
    $acad_edu1_newimg = $_POST['acad_edu1_newimg'];
    $acad_edu1_newbut = $_POST['acad_edu1_newbut'];

    $file_name = $_FILES['acad_edu1_newimg']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_edu1_newimg']['tmp_name'],$destination);

    $sql = "update acad_edu1 set acad_edu1_title='$acad_edu1_newtitle', acad_edu1_desc='$acad_edu1_newdesc', acad_edu1_img='$destination_name', acad_edu1_but='$acad_edu1_newbut' where acad_edu1_id=$id";

    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_edu1 AUTO_INCREMENT = 1");
    
    header("location:../acad_education.php");
}
// Edit Academics Education Table 2
if($_GET['action']=='edit-acadedu2'){
    
    $acad_edu2_newmas = $_POST['acad_edu2_newmas'];

    $sql = "update acad_edu2 set acad_edu2_mas='$acad_edu2_newmas' where acad_edu2_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../acad_education.php");
    }else {
        echo "Failed";
    }
}
// Edit Academics Nursing Table 1
if($_GET['action']=='edit-acadnur1'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_nur1_newtitle = $_POST['acad_nur1_newtitle'];
    $acad_nur1_newdesc = $_POST['acad_nur1_newdesc'];
    $acad_nur1_newimg = $_POST['acad_nur1_newimg'];
    $acad_nur1_newbut = $_POST['acad_nur1_newbut'];

    $file_name = $_FILES['acad_nur1_newimg']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_nur1_newimg']['tmp_name'],$destination);

    $sql = "update acad_nur1 set acad_nur1_title='$acad_nur1_newtitle', acad_nur1_desc='$acad_nur1_newdesc', acad_nur1_img='$destination_name', acad_nur1_but='$acad_nur1_newbut' where acad_nur1_id=$id";

    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_nur1 AUTO_INCREMENT = 1");
    
    header("location:../acad_nursing.php");
}
// Edit Academics Nursing Table 2
if($_GET['action']=='edit-acadnur2'){
    
    $acad_nur2_newmas = $_POST['acad_nur2_newmas'];

    $sql = "update acad_nur2 set acad_nur2_mas='$acad_nur2_newmas' where acad_nur2_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../acad_nursing.php");
    }else {
        echo "Failed";
    }
}
// Edit Contacts President's Office Table 1
if($_GET['action']=='edit-contpres'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $cont_pres_newtitle = $_POST['cont_pres_newtitle'];
    $cont_pres_newimg = $_POST['cont_pres_newimg'];


    $file_name = $_FILES['cont_pres_newimg']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['cont_pres_newimg']['tmp_name'],$destination);

    $sql = "update cont_pres set cont_pres_title='$cont_pres_newtitle', cont_pres_img='$destination_name' where cont_pres_id=$id";

    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_pres AUTO_INCREMENT = 1");
    
    header("location:../cont_pres.php");
}
// Edit Contacts President's Office Table 2
if($_GET['action']=='edit-contpres2'){
    
    $cont_pres2_newcont = $_POST['cont_pres2_newcont'];

    $sql = "update cont_pres2 set cont_pres2_cont='$cont_pres2_newcont' where cont_pres2_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../cont_pres.php");
    }else {
        echo "Failed";
    }
}
// Edit Contacts Vice President's Office Table 1
if($_GET['action']=='edit-contvpres'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $cont_vpres_newtitle = $_POST['cont_vpres_newtitle'];
    $cont_vpres_newimg = $_POST['cont_vpres_newimg'];


    $file_name = $_FILES['cont_vpres_newimg']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['cont_vpres_newimg']['tmp_name'],$destination);

    $sql = "update cont_vpres set cont_vpres_title='$cont_vpres_newtitle', cont_vpres_img='$destination_name' where cont_vpres_id=$id";

    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_vres AUTO_INCREMENT = 1");
    
    header("location:../cont_vicepres.php");
}
// Edit Contacts Vice President's Office Table 2
if($_GET['action']=='edit-contvpres2'){
    
    $cont_vpres2_newcont = $_POST['cont_vpres2_newcont'];

    $sql = "update cont_vpres2 set cont_vpres2_cont='$cont_vpres2_newcont' where cont_vpres2_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../cont_vicepres.php");
    }else {
        echo "Failed";
    }
}
?>