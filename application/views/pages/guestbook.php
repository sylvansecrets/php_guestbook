
<ul>
<?php
	foreach($guestlist->result_array() as $value) {
		$v_name = $value['visitor'];
		$v_comment = $value['comment'];
		echo "<li> Guest $v_name says $v_comment </li>";
	}
?>
</ul>

