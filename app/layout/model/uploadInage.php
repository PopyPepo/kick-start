<?php
function uploadInage($conn){
	$json = array();

	$table = isset($_GET['table']) ? $_GET['table'] : null;
	$fill = isset($_GET['fill']) ? $_GET['fill'] : null;


	if ( !empty( $_FILES ) ) {

		$tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
		$fileName = date("U").'_'.$_FILES[ 'file' ][ 'name' ];
		// $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $_FILES[ 'file' ][ 'name' ];
		$uploadPath = $conn->PATH."src/".$table."/".$fill."/".$fileName;

		if (move_uploaded_file( $tempPath, $uploadPath )){
			$json['answer'] = 'File transfer completed';
			$json['fileName'] = $fileName;
			$json['status'] = true;
		}else{
			$json['answer'] = 'File transfer fail!!';
		}
	} else {
		$json["alert"] = "No files";
	}

	return $json;
}
?>