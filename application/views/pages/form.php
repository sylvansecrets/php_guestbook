<section class="form-submission">

	<?php

	echo form_open('guestbook/data_submitted/'.$anti_bot, 'class="form-content"');

	echo form_label('Visitor Name: ', 'v_name');

	$data = array(
		'name' => 'v_name',
		'placeholder' => 'Please Enter Your Name',
		'class' => 'name-box'
		);

	echo form_input($data);

	echo "<br/>";

	echo form_label('Visitor Comment: ', 'v_comment');
	$data = array(
		'name' => 'v_comment',
		'placeholder' => 'Leave a message in the guestbook!',
		'class' => 'v-comment',
		'type' => 'text'
		);

	echo form_textarea($data);

	?>

	<div class="form_button">
	<?php
		$data = array(
			'type' => 'submit',
			'value' => 'Submit',
			'class' => 'submit_button'
			);
		echo form_submit($data);
	?>
	</div>

	<?php echo form_close(); ?>
</section>
