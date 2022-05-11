<?php
include ('../../dbconnect/connection.php');

if($_GET['action']=='m-delete'){
     echo 'm-delete';

}
// Delete Home Banner Image
if($_GET['action']=='del-banner'){
    $id = $_GET['id'];

    $sql="delete from home_banner where hb_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_banner auto_increment = 1 ');
            header('location:../home_banner.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }
}
// Delete from Home About Page
if($_GET['action']=='del-habout'){
    $id = $_GET['id'];

    $sql="delete from home_about where ha_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_about auto_increment = 1 ');
            header('location:../home_about.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the About Header
if($_GET['action']=='del-abouthead'){
    $id = $_GET['id'];

    $sql="delete from about_header where about_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_header auto_increment = 1 ');
            header('location:../about_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Distance Learning
if($_GET['action']=='del-dldesc'){
    $id = $_GET['id'];

    $sql="delete from about_dldesc where about_dl_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_dldesc auto_increment = 1 ');
            header('location:../about_aboutdesc.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Mission
if($_GET['action']=='del-aboutmis'){
    $id = $_GET['id'];

    $sql="delete from about_mis where about_mis_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_mis auto_increment = 1 ');
            header('location:../about_mission.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Vision
if($_GET['action']=='del-aboutvis'){
    $id = $_GET['id'];

    $sql="delete from about_vis where about_vis_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_vis auto_increment = 1 ');
            header('location:../about_vision.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Rationale
if($_GET['action']=='del-aboutrat'){
    $id = $_GET['id'];

    $sql="delete from about_rat where about_rat_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_rat auto_increment = 1 ');
            header('location:../about_rationale.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Header
if($_GET['action']=='del-acadheader'){
    $id = $_GET['id'];

    $sql="delete from acad_header where acad_header_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_header auto_increment = 1 ');
            header('location:../acad_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Admission Header
if($_GET['action']=='del-admheader'){
    $id = $_GET['id'];

    $sql="delete from adm_header where adm_header_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table adm_header auto_increment = 1 ');
            header('location:../adm_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contact Us Other Contacts
if($_GET['action']=='del-contother'){
    $id = $_GET['id'];

    $sql="delete from cont_other where cont_other_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_other auto_increment = 1 ');
            header('location:../cont_othercontacts.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Home Program Offers Table 2
if($_GET['action']=='del-progoff'){
    $id = $_GET['id'];

    $sql="delete from home_progoff where hpo_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_progoff auto_increment = 1 ');
            header('location:../home_programs_offered.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Home Program Offers Table 1
if($_GET['action']=='del-progtitle'){
    $id = $_GET['id'];

    $sql="delete from home_progtitle where hpt_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_progtitle auto_increment = 1 ');
            header('location:../home_programs_offered.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Admission Requirements
if($_GET['action']=='del-admreq'){
    $id = $_GET['id'];

    $sql="delete from adm_req where adm_req_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table adm_req auto_increment = 1 ');
            header('location:../adm_req.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Admission Enrolment Procedure
if($_GET['action']=='del-admenrol'){
    $id = $_GET['id'];

    $sql="delete from adm_enrol where adm_enr_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table adm_enrol auto_increment = 1 ');
            header('location:../adm_enrol.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Admission Terms and Policy
if($_GET['action']=='del-admterm'){
    $id = $_GET['id'];

    $sql="delete from adm_term where adm_term_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table adm_term auto_increment = 1 ');
            header('location:../adm_term.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Education Table 1
if($_GET['action']=='del-acadedu1'){
    $id = $_GET['id'];

    $sql="delete from acad_edu1 where acad_edu1_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_edu1 auto_increment = 1 ');
            header('location:../acad_education.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Education Table 2
if($_GET['action']=='del-acadedu2'){
    $id = $_GET['id'];

    $sql="delete from acad_edu2 where acad_edu2_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_edu2 auto_increment = 1 ');
            header('location:../acad_education.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Nusring Table 1
if($_GET['action']=='del-acadnur1'){
    $id = $_GET['id'];

    $sql="delete from acad_nur1 where acad_nur1_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_nur1 auto_increment = 1 ');
            header('location:../acad_nursing.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Nursing Table 2
if($_GET['action']=='del-acadnur2'){
    $id = $_GET['id'];

    $sql="delete from acad_nur2 where acad_nur2_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_nur2 auto_increment = 1 ');
            header('location:../acad_nursing.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contacts Presdient's Office Table 1
if($_GET['action']=='del-contpres'){
    $id = $_GET['id'];

    $sql="delete from cont_pres where cont_pres_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_pres auto_increment = 1 ');
            header('location:../cont_pres.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contacts President's Office Table 2
if($_GET['action']=='del-contpres2'){
    $id = $_GET['id'];

    $sql="delete from cont_pres2 where cont_pres2_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_pres2 auto_increment = 1 ');
            header('location:../cont_pres.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contacts Vice Presdient's Office Table 1
if($_GET['action']=='del-contvpres'){
    $id = $_GET['id'];

    $sql="delete from cont_vpres where cont_vpres_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_vpres auto_increment = 1 ');
            header('location:../cont_vicepres.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contacts Vice President's Office Table 2
if($_GET['action']=='del-contvpres2'){
    $id = $_GET['id'];

    $sql="delete from cont_vpres2 where cont_vpres2_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_vpres2 auto_increment = 1 ');
            header('location:../cont_vicepres.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Education Files
if($_GET['action']=='del-edufile'){
    $id = $_GET['id'];

    $sql="delete from acad_edu3 where acad_edu3_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_edu3 auto_increment = 1 ');
            header('location:../acad_education.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Nursing Files
if($_GET['action']=='del-nurfile'){
    $id = $_GET['id'];

    $sql="delete from acad_nur3 where acad_nur3_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_nur3 auto_increment = 1 ');
            header('location:../acad_nursing.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
?>