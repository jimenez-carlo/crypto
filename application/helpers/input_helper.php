<?php
if(!function_exists('attribute'))
{
	function attribute(){
		$obj = new stdClass; 
		$obj->username_login  = array('placeholder' => 'Username', 'autocomplete' => 'off', 'class' => 'form-control', 'autofocus' => 'true');
		$obj->password_login  = array('placeholder' => 'Password', 'autocomplete' => 'off', 'class' => 'form-control');
		$obj->submit_login    = array('name' => 'login_account', 'type' => 'submit', 'class'=>'btn btn-theme btn-block', 'content' => '<i class="fa fa-lock"></i> SIGN IN');
		$obj->username_create = array('placeholder' => 'Username', 'autocomplete' => 'off', 'class' => 'form-control placeholder-nofix');
		$obj->password_create = array('placeholder' => 'Password', 'autocomplete' => 'off', 'class' => 'form-control placeholder-nofix');
		$obj->submit_create   = array('name' => 'create_account', 'type' => 'submit', 'class'=>'btn btn-theme', 'content' => 'Create <i class="fa fa-save"></i>');
		$obj->text_area 	 = array('rows' => '20', 'cols' => '5', 'class' => 'form-control');
		$obj->form_control   = array('class' => 'form-control'); 
		$obj->file   	     = array('class' => 'file-pos'); 
		$obj->home_label     = array('class' => 'col-lg-2 control-label');
		$obj->home_update    = array('name' => 'update_profile', 'type' => 'submit', 'class'=>'btn btn-theme', 'content' => '<i class="fa fa-save"></i> UPDATE PROFILE'); 
		$obj->create_post    = array('name' => 'create_post', 'type' => 'submit', 'class'=>'btn btn-sm btn-theme03','content' => 'POST'); 
		
		return  $obj;
	}
}
if(!function_exists('time_elapsed_string'))
{
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
	}
}
?>