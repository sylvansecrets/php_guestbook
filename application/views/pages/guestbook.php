
<ul>
<?php
	foreach($guestlist as $value) {
		$v_name = $value['visitor_name'];
		$v_comment = $value['visitor_comment'];
		echo "<li> Guest $v_name says $v_comment </li>";
	}
?>
</ul>

