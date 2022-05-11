<?php
   include ('../../dbconnect/connection.php');

// Update Home About Distance Learning
if($_GET['action']=='upd-habout'){
    $ha_title = $_POST['ha_title'];
    $ha_subtitle = $_POST['ha_subtitle'];
    $ha_desc = $_POST['ha_desc'];


    $sql = "insert into home_about(ha_title, ha_subtitle, ha_desc) values('$ha_title', '$ha_subtitle', '$ha_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../home_about.php");
    }else {
        echo "Failed";
    }
}
// Update About Distance Learning
if($_GET['action']=='upd-aboutdl'){
    $about_dl_logo = $_POST['about_dl_logo'];
    $about_dl_title = $_POST['about_dl_title'];
    $about_dl_desc = $_POST['about_dl_desc'];


    $sql = "insert into about_dldesc(about_dl_logo, about_dl_title, about_dl_desc) values('$about_dl_logo', '$about_dl_title', '$about_dl_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_aboutdesc.php");
    }else {
        echo "Failed";
    }
}
// Update About Mission
if($_GET['action']=='upd-aboutmis'){
    $about_mis_title = $_POST['about_mis_title'];
    $about_mis_desc = $_POST['about_mis_desc'];


    $sql = "insert into about_mis(about_mis_title, about_mis_desc) values('$about_mis_title', '$about_mis_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_mission.php");
    }else {
        echo "Failed";
    }
}
// Update About Vission
if($_GET['action']=='upd-aboutvis'){
    $about_vis_title = $_POST['about_vis_title'];
    $about_vis_desc = $_POST['about_vis_desc'];


    $sql = "insert into about_vis(about_vis_title, about_vis_desc) values('$about_vis_title', '$about_vis_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_vision.php");
    }else {
        echo "Failed";
    }
}
// Update About Rationale
if($_GET['action']=='upd-aboutrat'){
    $about_rat_title = $_POST['about_rat_title'];
    $about_rat_desc = $_POST['about_rat_desc'];


    $sql = "insert into about_rat(about_rat_title, about_rat_desc) values('$about_rat_title', '$about_rat_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_rationale.php");
    }else {
        echo "Failed";
    }
}
// Update Contact Us Other Contacts
if($_GET['action']=='upd-contother'){
    $cont_other_name = $_POST['cont_other_name'];
    $cont_other_contact = $_POST['cont_other_contact'];


    $sql = "insert into cont_other(cont_other_name, cont_other_contact) values('$cont_other_name', '$cont_other_contact')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../cont_othercontacts.php");
    }else {
        echo "Failed";
    }
}
// Update Home Program Offers Program Offer Label
if($_GET['action']=='upd-hprogoff'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $hpo_potitle = $_POST['hpo_potitle'];
    $hpo_logo =$_POST['hpo_logo'];

    
    $file_name = $_FILES['hpo_logo']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['hpo_logo']['tmp_name'],$destination);

    mysqli_query($con, "insert into home_progoff(hpo_logo, hpo_potitle)values ('$destination_name', '$hpo_potitle');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table home_progoff AUTO_INCREMENT = 1");
    
    header("location:../home_programs_offered.php");

}
// Update Home Program Offer Main Title
if($_GET['action']=='upd-progtitle'){
    $hpt_title = $_POST['hpt_title'];


    $sql = "insert into home_progtitle(hpt_title) values('$hpt_title')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../home_programs_offered.php");
    }else {
        echo "Failed";
    }
}
// Update Admission Requirements 
if($_GET['action']=='upd-admreq'){
    $adm_req_title = $_POST['adm_req_title'];
    $adm_req_cont = $_POST['adm_req_cont'];


    $sql = "insert into adm_req(adm_req_title, adm_req_cont) values('$adm_req_title', '$adm_req_cont')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../adm_req.php");
    }else {
        echo "Failed";
    }
}
// Update Admission Enrolment Procedure
if($_GET['action']=='upd-admenrol'){
    $adm_enr_title = $_POST['adm_enr_title'];
    $adm_enr_cont = $_POST['adm_enr_cont'];


    $sql = "insert into adm_enrol(adm_enr_title, adm_enr_cont) values('$adm_enr_title', '$adm_enr_cont')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../adm_enrol.php");
    }else {
        echo "Failed";
    }
}
// Update Admission Terms and Policy
if($_GET['action']=='upd-admterm'){
    $adm_term_title = $_POST['adm_term_title'];
    $adm_term_cont = $_POST['adm_term_cont'];


    $sql = "insert into adm_term(adm_term_title, adm_term_cont) values('$adm_term_title', '$adm_term_cont')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../adm_term.php");
    }else {
        echo "Failed";
    }
}
// Update Academics Education Table 1
if($_GET['action']=='upd-acadedu1'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_edu1_title = $_POST['acad_edu1_title'];
    $acad_edu1_img = $_POST['acad_edu1_img'];
    $acad_edu1_desc = $_POST['acad_edu1_desc'];
    $acad_edu1_but = $_POST['acad_edu1_but'];

    
    $file_name = $_FILES['acad_edu1_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_edu1_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into acad_edu1(acad_edu1_img, acad_edu1_title, acad_edu1_desc, acad_edu1_but)values ('$destination_name', '$acad_edu1_title', '$acad_edu1_desc', '$acad_edu1_but');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_edu1 AUTO_INCREMENT = 1");
    
    header("location:../acad_education.php");

}
// Update Academics Education Master Degree Courses Table 2
if($_GET['action']=='upd-acadedu2'){

    $acad_edu2_mas = $_POST['acad_edu2_mas'];


    mysqli_query($con, "insert into acad_edu2(acad_edu2_mas) values('$acad_edu2_mas');");
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_edu2 AUTO_INCREMENT = 1");
    
    header("location:../acad_education.php");
}
// Update Academics Nursing Table 1
if($_GET['action']=='upd-acadnur1'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $acad_nur1_title = $_POST['acad_nur1_title'];
    $acad_nur1_img = $_POST['acad_nur1_img'];
    $acad_nur1_desc = $_POST['acad_nur1_desc'];
    $acad_nur1_but = $_POST['acad_nur1_but'];

    
    $file_name = $_FILES['acad_nur1_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['acad_nur1_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into acad_nur1(acad_nur1_img, acad_nur1_title, acad_nur1_desc, acad_nur1_but)values ('$destination_name', '$acad_nur1_title', '$acad_nur1_desc', '$acad_nur1_but');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_nur1 AUTO_INCREMENT = 1");
    
    header("location:../acad_nursing.php");

}
// Update Academics Nursing Master Degree Courses Table 2
if($_GET['action']=='upd-acadnur2'){

    $acad_nur2_mas = $_POST['acad_nur2_mas'];


    mysqli_query($con, "insert into acad_nur2(acad_nur2_mas) values('$acad_nur2_mas');");
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table acad_nur2 AUTO_INCREMENT = 1");
    
    header("location:../acad_nursing.php");
}
// Update Contacts President's Office 1
if($_GET['action']=='upd-contpres'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $cont_pres_img = $_POST['cont_pres_img'];
    $cont_pres_title = $_POST['cont_pres_title'];


    $file_name = $_FILES['cont_pres_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['cont_pres_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into cont_pres(cont_pres_img, cont_pres_title)values ('$destination_name', '$cont_pres_title');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_pres AUTO_INCREMENT = 1");
    
    header("location:../cont_pres.php");

}
// Update Contacts President's Office 2
if($_GET['action']=='upd-contpres2'){

    $cont_pres2_cont = $_POST['cont_pres2_cont'];


    mysqli_query($con, "insert into cont_pres2(cont_pres2_cont) values('$cont_pres2_cont');");
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_pres2 AUTO_INCREMENT = 1");
    
    header("location:../cont_pres.php");
}
// Update Contacts Vice President's Office 1
if($_GET['action']=='upd-contvpres'){
    $random1 = rand(1111,9999);
    $random2 = rand(1111,9999);
    $random3 = $random1.$random2;
    $random3 = md5($random3);
    $cont_vpres_img = $_POST['cont_vpres_img'];
    $cont_vpres_title = $_POST['cont_vpres_title'];


    $file_name = $_FILES['cont_vpres_img']['name'];
    $destination = '../../upload_img/'.$random3.$file_name;
    $destination_name = 'upload_img/'.$random3.$file_name;
    move_uploaded_file($_FILES['cont_vpres_img']['tmp_name'],$destination);

    mysqli_query($con, "insert into cont_vpres(cont_vpres_img, cont_vpres_title)values ('$destination_name', '$cont_vpres_title');");
    
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_vpres AUTO_INCREMENT = 1");
    
    header("location:../cont_vicepres.php");

}
// Update Contacts Vice President's Office 2
if($_GET['action']=='upd-contvpres2'){

    $cont_vpres2_cont = $_POST['cont_vpres2_cont'];


    mysqli_query($con, "insert into cont_vpres2(cont_vpres2_cont) values('$cont_vpres2_cont');");
    $result = mysqli_query($con, $sql);

    mysqli_query($con, "alter table cont_vpres2 AUTO_INCREMENT = 1");
    
    header("location:../cont_vicepres.php");
}
?>
