<div class="span5 boxes registerBG">
    <div class="row-fluid"><div class="span12"><img src="<?php echo base_url();?>img/reg/step-1.png" /></div></div>    
    <div class="row-fluid">
        <div class="span12"><hr /></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <ul class="error">
                <?php 
                    $this->form_validation->set_error_delimiters('<li>','</li>'); 
                    echo validation_errors();
                                                                                 
                ?>
            </ul>
        </div>
    </div>
    <?php echo form_open('register/create_member');?>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Nama User ','username');?>
        </div>
        <div class="span8">
            <?php echo form_input(array('name'=>'username','id'=>'username','class'=>'span12'));?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Password ','password');?>
        </div>
        <div class="span8">
            <?php echo form_password(array('name'=>'password','id'=>'password','class'=>'span12'));?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Konfirmasi Password ','password2');?>
        </div>
        <div class="span8">
            <?php echo form_password(array('name'=>'password2','id'=>'password2','class'=>'span12'));?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Email','email');?>
        </div>
        <div class="span8">
            <?php echo form_input(array('name'=>'email','id'=>'email','class'=>'span12'));?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Nama Lengkap','fullname');?>
        </div>
        <div class="span8">
            <?php echo form_input(array('name'=>'fullname','id'=>'fullname','class'=>'span12'));?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Jenis Kelamin');?>
        </div>
        <div class="span8">
            <label class="radio">
                <?php echo form_radio('gender','M',true);?>
                Laki-laki
            </label>
            <label class="radio">
                <?php echo form_radio('gender','F',false);?>
                Perempuan
            </label>            
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Provinsi','provinsi');?>
        </div>
        <div class="span8">
            <?php echo form_dropdown('provinsi', $list_provinsi, '', 'id = "provinsi" class="span12"');?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">        
            <?php echo form_label('Kota','kota');?>
        </div>
        <div class="span8">
            <?php echo form_dropdown('kota', $list_kota, '', 'id = "kota" class="span12"');?>
        </div>
    </div>
    <div class="row-fluid">     
        <div class="span8 offset4">
            <?php echo form_submit('submit','Langkah Berikutnya','class="btn btn-success"');?>
        </div>
    </div>
</div>
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
/*echo '<div id="" style="width:470px ;height:470px ;">';
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
*/?>