<?php
echo form_fieldset('Login');
echo '<ul class="errors">';
$this->form_validation->set_error_delimiters('<li>','</li>');
echo validation_errors();
if($login_error){
    echo '<li>'.$login_error.'</li>';
}
echo '</ul>';
echo form_open('user/login_act');
echo form_label('Username : ','username');
echo form_input('username');
echo '<br></br>';
echo form_label('Password : ','password');
echo form_input('password');
echo '<br></br>';
echo form_submit('submit','Login');
echo form_close();
?>