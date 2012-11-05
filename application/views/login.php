<div>LOGO</div>
<div id="divLogin">
<?php echo form_open('login/login_act'); ?>
                <table id="tblHomeLogin">
                    <tr>
                        <td align="left"><?php echo form_input(array('name'=>'username','id'=>'loginUsername','class'=>'seInput')); ?></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo form_input(array('name'=>'password','id'=>'loginPassword','class'=>'seInput')); ?></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo form_checkbox('remember', 'accept', FALSE); ?> Remember me &nbsp;|&nbsp;
                        <a href="">Forgot Your Password ?</a></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo form_submit('submit','Masuk','class="seMasuk"'); ?> &nbsp;<?php echo form_submit('submit','Daftar','class="seDaftar"'); ?></td>
                    </tr>
                </table>
             <?php echo form_close(); ?>
</div>            