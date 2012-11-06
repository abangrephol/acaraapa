<script type="text/javascript">
$(document).ready(function() {
    var provinsi = {provinsi:$("#provinsi").val()};

$.ajax({
type: "POST",
url : "<?php echo base_url(); ?>data/datakota/grab_kota",
data: provinsi,
success: function(callback){

$('#kota').html(callback);
}
});
    
$("#provinsi").change(function(){
var provinsi = {provinsi:$("#provinsi").val()};

$.ajax({
type: "POST",
url : "<?php echo base_url(); ?>data/datakota/grab_kota",
data: provinsi,
success: function(callback){

$('#kota').html(callback);
}
});
});
});
</script>
<?php
echo '<div id="" style="width:470px ;height:470px ;">';
echo '<table border=0><tr><td>1</td>';
echo '<td>2</td>';
echo '<td>3</td>';
echo '<td>4</td></tr>';
echo '<tr><td colspan="4"></td></tr>';
echo '<tr><td colspan="4">';
echo form_fieldset('Registration');
echo '<ul class="errors">';
$this->form_validation->set_error_delimiters('<li>','</li>');
echo validation_errors();
echo '</ul>';
echo '<div id="divRegister">';
echo form_open('user/create_member');
echo '<table border=0><tr><td>';
echo form_label('Username ','username');
echo '</td><td>';
echo form_input(array('name'=>'username','id'=>'username','class'=>'reInput'));
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Password ','password');
echo '</td><td>';
echo form_password(array('name'=>'password','id'=>'password','class'=>'reInput'));
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Password ','password2');
echo '</td><td>';
echo form_password(array('name'=>'password2','id'=>'password2','class'=>'reInput'));
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Email ','email');
echo '</td><td>';
echo form_input(array('name'=>'email','id'=>'email','class'=>'reInput'));
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Fullname ','fullname');
echo '</td><td>';
echo form_input(array('name'=>'fullname','id'=>'fullname','class'=>'reInput'));
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Gender ','gender');
echo '</td><td>';
echo form_radio('gender','Male',true,'class="reInput"');
echo form_label('Male ','male');
echo form_radio('gender','Female',true,'class="reInput"');
echo form_label('Female ','female');
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Provinsi ','provinsi');
echo '</td><td>';
echo form_dropdown('provinsi', $list_provinsi, '', 'id = "provinsi" class="reInput"');
echo '</td></tr>';
echo '<tr><td>';
echo form_label('Kota ','kota');
echo '</td><td>';
echo form_dropdown('kota', $list_kota, '', 'id = "kota" class="reInput"');
echo '</td></tr>';
echo '<tr><td>';
echo '</td><td align="left">';
echo form_submit('submit','Register','class="reRegister"');
echo '</td></tr></table>';
echo form_close();
echo '</div>';
echo '</td></tr></table>';
echo '</div>';
?>
