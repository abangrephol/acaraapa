<div class="indexContainer" align="center">
<table width="940">
    <tr>
        <td width="600" valign="top">
            <table width="100%" border="1">
                <tr>
                    <td colspan="4">
                    -
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>
        </td>
        <td valign="top">
            <div id="divLogin">
            <?php echo form_open(''); ?>
                <table id="tblHomeSearch">
                    <tr>
                        <td colspan="2"><span id="searchTitle">Cari event yang anda suka</span></td>
                    </tr>
                    <tr>
                        <td align="right">Nama Event&nbsp;</td>
                        <td align="left"><?php echo form_input(array('name'=>'namaevent','id'=>'namaevent','class'=>'seInput')); ?></td>
                    </tr>
                        <td align="right">Kategori&nbsp;</td>
                        <td align="left"><?php echo form_dropdown('kategori',array('Pilih kategori'),'Pilih kategori','id="kategori" class="seInput"'); ?></td>
                    <tr>
                        <td colspan="2">-</td>
                    </tr>
                    <tr>
                        <td colspan="2">-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left"><?php echo form_submit('submit','Cari','class="seCari"'); ?></td>
                    </tr>
                    <tr>
                    <td colspan="2">---------</td>
                    </tr>
                </table>
            <?php echo form_close(); ?>
            
            <?php echo form_open('user/login_act'); ?>
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
        </td>
    </tr>


</table>
 </div>