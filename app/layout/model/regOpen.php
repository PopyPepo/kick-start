<?php
function regOpen($conn){
	include_once($conn->PATH."plugin/thaidate/Okvee/Thaidate/Thaidate.php");
	include_once($conn->PATH."plugin/thaidate/Okvee/Thaidate/thaidate-functions.php");


	$course_id = isset($_GET['course_id']) ? addslashes($_GET['course_id']) : null;
	
	$dateNow = date("Y-m-d");
	$where = "reg_active>0 AND reg_status>0 AND (open_start_date<='".$dateNow."' AND open_end_date>='".$dateNow."')";


	// $sql = "SELECT app_register.*, app_course.course_nameTh, app_course.picture, app_category_course.cat_namerTh, app_category_course.cat_nameEn FROM app_register, app_course, app_category_course WHERE idcourse=course_id AND idcat_course=cat_course_id AND ".$where."";

	$sql = "SELECT app_course.idcourse, app_course.course_nameTh, app_course.picture, app_category_course.cat_namerTh, app_category_course.cat_nameEn FROM app_course, app_category_course WHERE idcat_course=cat_course_id";
	$sql = "SELECT * FROM app_register LEFT JOIN (".$sql.") m_course ON m_course.idcourse=course_id WHERE ".$where."";


	$query = $conn->query($sql);
	$json["instance"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {

		$sqlCount = "SELECT count(idmember) AS total FROM app_member WHERE member_active=1 AND pay_status>0 AND register_id='".$instance['idregister']."'";
		$result = $conn->prepare($sqlCount); 
		$result->execute();
		$total = $result->fetchColumn();

		$instance['price'] = floatval($instance['price']);
		$instance['date_open'] = thaidate("d M y", strtotime($instance['open_start_date']));
		$instance['date_code'] = thaidate("d M y", strtotime($instance['open_end_date']));
		$instance['member_num'] = intval($total);

		$json["instance"][] = $instance;
	}

	return $json;
}	
?>