<div class="eventThumb span8">    
    <div class="row-fluid">    
        <li class="span12">
            <div class="thumbnail"></div>
        </li>
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail"></div>
            </li>
            <li class="span3">
                <div class="thumbnail"></div>
            </li>
            <li class="span3">
                <div class="thumbnail"></div>
            </li>
            <li class="span3">
                <div class="thumbnail"></div>
            </li>                
        </ul>
    </div>
</div>    
<div class="span4 boxes">
    <?php echo form_open(''); ?>
    <div class="tblHomeSearch">
        <div class="lead"><center>Cari event yang anda suka</center></div>
        <div><?php echo form_input(array('name'=>'namaevent','id'=>'namaevent','class'=>'span12','placeholder'=>'Masukkan Nama Event')); ?></div>
        <div><?php echo form_dropdown('kategori',array('Pilih kategori'),'Pilih kategori','id="kategori" class="span12"'); ?></div>
        <div><?php echo form_submit('submit','   Cari   ','class="btn btn-warning span12"'); ?></div>                
    </div> 
    <?php echo form_close(); ?>
    <hr />
    <?php echo form_open('login/login_act'); ?>
    <div class="tblHomeLogin">
        <div><?php echo form_input(array('name'=>'username','id'=>'loginUsername','class'=>'span12','placeholder'=>'Username')); ?></div>
        <div><?php echo form_password(array('name'=>'password','id'=>'loginPassword','class'=>'span12','placeholder'=>'Password')); ?></div>
        <div><?php echo form_checkbox('remember', 'accept', FALSE); ?> Remember me &nbsp;|&nbsp;<a href="">Forgot Your Password ?</a></div>
        <div class="row-fluid"><?php echo form_submit('submit','Masuk','class="btn span6"'); ?> <?php echo form_submit('submit','Daftar','class="btn btn-primary span6"'); ?></div>
    </div>
    <?php echo form_close(); ?>        
</div>