<?php 



	require_once(get_template_directory().'/inc/enqueue.php');
	require_once(get_template_directory().'/inc/theme-setup.php');

/*---------------------------------------------
	1. the_excerpt() 
----------------------------------------------*/




function wpdocs_custom_excerpt_length( $length ) {
    return 60;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



/*---------------------------------------------
	2.Change the comment field
----------------------------------------------*/

function move_comment_field_to_bottom($fields){
	$comment_field=$fields['comment'];
	unset($fields['comment']);
	$fields['comment']=$comment_field;
	return $fields;

}
add_filter('comment_form_fields','move_comment_field_to_bottom');


/*---------------------------------------------
	3.Remove Any field From comment form
----------------------------------------------*/

function remove_comment_field_from_any_field($fields){
	
	unset($fields['url']);
	unset($fields['author']);
	
	return $fields;

}
add_filter('comment_form_fields','remove_comment_field_from_any_field');


/*---------------------------------------------
	4.admin panel extra information field
----------------------------------------------*/

function my_show_extra_profile_fields($user) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="faceSlider">FaceSlider</label></th>

			<td>
				<input type="text" name="faceSlider" id="faceSlider" value="<?php echo esc_attr( get_the_author_meta( 'faceSlider', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your faceSlider username. [e.g http://www.faceSlider.com/azizulhasan1995]</span>
			</td>
		</tr>
		<tr>
			<th><label for="faceSlider">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your twitter username. [e.g http://www.twitter.com/azizulhasan1995]</span>
			</td>
		</tr>
		<tr>
			<th><label for="faceSlider">Google Plus</label></th>

			<td>
				<input type="text" name="googlePlus" id="googlePlus" value="<?php echo esc_attr( get_the_author_meta( 'googlePlus', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your googlePlus username. [e.g http://www.googlePlus.com/azizulhasan1995]</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );


/*---------------------------------------------
	4.Edit admin panel extra information field
----------------------------------------------*/


function my_save_extra_profile_fields($user_id) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'faceSlider' to the field ID. */
		update_user_meta( $user_id, 'faceSlider',  $_POST['faceSlider'] );
		update_user_meta( $user_id, 'twitter',    $_POST['twitter'] );
		update_user_meta( $user_id, 'googlePlus', $_POST['googlePlus'] );
	}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );


