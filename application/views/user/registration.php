<?php
echo form_fieldset('Registration');
echo '<ul class="errors">';
$this->form_validation->set_error_delimiters('<li>','</li>');
echo validation_errors();

echo '</ul>';
echo form_open('user/create_member');
echo '<table><tr><td align="right">';
echo form_label('Username : ','username');
echo '</td><td>';
echo form_input('username');
echo '</td></tr>';
echo '<tr><td align="right">';
echo form_label('Password : ','password');
echo '</td><td>';
echo form_password('password');
echo '</td></tr>';
echo '<tr><td align="right">';
echo form_label('Password : ','password2');
echo '</td><td>';
echo form_password('password');
echo '</td></tr>';
echo '<tr><td align="right">';
echo form_label('Email : ','email');
echo '</td><td>';
echo form_input('email');
echo '</td></tr>';
echo '<tr><td align="right">';
echo form_label('Fullname : ','fullname');
echo '</td><td>';
echo form_input('fullname');
echo '</td></tr>';
echo '<tr><td>';
echo '</td><td align="left">';
echo form_submit('submit','Login');
echo '</td></tr></table>';
echo form_close();
?>