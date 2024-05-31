<?php
function memberRegister($conn){
	$json = array();
    $WHERE = "member_active>0 AND pay_status=2 AND";
    $sql = "SELECT app_member.*, course_id, app_course.course_nameTh, app_course.picture, title, detail, app_register.modern_link, open_start_date, open_end_date, price FROM app_member, app_register, app_course WHERE ".$WHERE." register_id=idregister AND idcourse=course_id ORDER BY app_member.reg_date";


	$dateNow = date("Y-m-d H:i:s");
	$query = $conn->query($sql);
	$json["instance"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {
		if ($dateNow>$instance['pay_lastDate'] && $instance['pay_status']=='1'){
			$instance['pay_status'] = '44';
		}
		$json["instance"][] = $instance;
	}

	return $json;
}	
?>