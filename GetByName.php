<?php
	$url = new Url();
	echo json_encode(Position::findPositionAbilityByName($url->get('name')) , JSON_UNESCAPED_UNICODE);
	$action = $url->post('action');
	if ($action == 'delete') {
		echo "Hehe";
	}
	if ($action == 'chenliangyu') {
		if ($action == 'chenliangyu') {
			echo "Hehehe";
		} else {
			echo "Gagaga";
		}
		echo "something hehehehe";
	}
	
?>
