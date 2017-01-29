<section class="form-submission">

	<?php
	$data = array(
		'class' => 'form-content '.md5(rand())
		);
	echo form_open('guestbook/data_submitted/'.$anti_bot, $data);

	echo form_label('Visitor Name: ', 'v_name');

	$data = array(
		'name' => 'v_name',
		'placeholder' => 'Please Enter Your Name',
		'class' => 'name-box '.md5(rand())
		);

	echo form_input($data);

	echo "<br/>";

	echo form_label('Visitor Comment: ', 'v_comment');
	$data = array(
		'name' => 'v_comment',
		'placeholder' => 'Leave a message in the guestbook!',
		'class' => 'v-comment '.md5(rand()),
		'type' => 'text'
		);

	echo form_textarea($data);

	?>

	<div class="form_button">
	<?php
		$data = array(
			'type' => 'submit',
			'value' => 'Submit',
			'class' => 'submit_button '.md5(rand())
			);
		echo form_submit($data);
	?>
	</div>

	<?php echo form_close(); ?>
</section>
