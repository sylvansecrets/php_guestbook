
<section class="guestbook-entries">
<?php
	foreach($guestlist->result_array() as $value) {
		$v_name = htmlspecialchars($value['visitor'], ENT_QUOTES, 'UTF-8');
		$v_comment = htmlspecialchars($value['comment'], ENT_QUOTES, 'UTF-8');
		$v_time = date(DATE_RFC2822, strtotime($value['time']));
		$comment_id = $value['id'];
		echo "
		<article class='guestbook-entry'>
			<span class='visitor-name'> $v_name says:</span>
			<br/>
			<span class='comment-time'> at $v_time </span>
			<div class='para-container'>
				<a href='guestbook/delete_comment/$comment_id'> <i class='fa fa-trash' aria-hidden='true'></i> </a>
				<p class='visitor-comment'> $v_comment </p>
			</div>
		</article>
		";

	}
?>
</section>

