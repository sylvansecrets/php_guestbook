
<ul>
<?php
	foreach($guestlist->result_array() as $value) {
		$v_name = $value['visitor'];
		$v_comment = $value['comment'];
		$comment_id = $value['id'];
		echo "<li>";
		echo "Guest $v_name says $v_comment";
		echo "<a href='guestbook/delete_comment/$comment_id'> Delete </a>";
		echo "</li>";
	}
?>
</ul>

