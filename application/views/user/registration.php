
<script type="text/javascript">
$(document).ready(function() {
    var provinsi = {provinsi:$("#provinsi").val()};

$.ajax({
type: "POST",
url : "<?php echo base_url(); ?>user/grab_kota",
data: provinsi,
success: function(callback){

$('#kota').html(callback);
}
});
    
$("#provinsi").change(function(){
var provinsi = {provinsi:$("#provinsi").val()};

$.ajax({
type: "POST",
url : "<?php echo base_url(); ?>user/grab_kota",
data: provinsi,
success: function(callback){

$('#kota').html(callback);
}
});
});
});
</script>
<?php

echo form_fieldset('Registration');
echo '<ul class="errors">';
$this->form_validation->set_error_delimiters('<li>','</li>');
echo validation_errors();

echo '</ul>';
echo form_open('user/create_member');
echo '<table><tr><td class="right">';
echo form_label('Username : ','username');
echo '</td><td>';
echo form_input('username');
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Password : ','password');
echo '</td><td>';
echo form_password('password');
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Password : ','password2');
echo '</td><td>';
echo form_password('password2', set_value('password2'));
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Email : ','email');
echo '</td><td>';
echo form_input('email');
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Fullname : ','fullname');
echo '</td><td>';
echo form_input('fullname');
echo '</td></tr>';
echo '<tr><td class="right">';
echo 'Gender :';
echo '</td><td class="center">';
echo form_radio('gender','Male',true);
echo form_label('Male ','male');
echo form_radio('gender','Female',true);
echo form_label('Female ','female');
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Provinsi : ','provinsi');
echo '</td><td>';
echo form_dropdown('provinsi', $list_provinsi, '', 'id = "provinsi"');
echo '</td></tr>';
echo '<tr><td class="right">';
echo form_label('Kota : ','kota');
echo '</td><td>';
echo form_dropdown('kota', $list_kota, '', 'id = "kota"');
echo '</td></tr>';
echo '<tr><td>';
echo '</td><td align="left">';
echo form_submit('submit','Register');
echo '</td></tr></table>';
echo form_close();
?>