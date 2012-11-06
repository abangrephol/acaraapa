<div style="float: left;">1</div>
<div style="float: left;">2</div>
<div style="float: left;">3</div>
<div>4</div>
<?php form_open('');?>
<div id="divFavorit" style="width:470px ;height:470px ;">
    <div style="width: 100%;">
        Pilih Event Favoritmu
    </div>
    <div style="float: left;width: 50%;">
        <?php echo form_checkbox('agama', 'accept', FALSE);
        echo form_label('Agama','agama');
        ?>
    </div>
    <div style="float: left;width: 50%;">
        <?php echo form_checkbox('pendidikan', 'accept', FALSE);
        echo form_label('Pendidikan/Seminar','pendidikan');
        ?>
    </div>
    <div style="float: left;width: 50%;">
        <?php echo form_checkbox('konser', 'accept', FALSE);
        echo form_label('Konser','konser');
        ?>
    </div>
    <div style="float: left;width: 50%;">
        <?php echo form_checkbox('pesta', 'accept', FALSE);
        echo form_label('Pesta Rakyat/Pameran','konser');
        ?>
    </div>
    <div style="float: left;width:25% ;">
        <a href="">Kembali</a>
    </div>
    <div style="float: left;width:25% ;">
        <a href="">Lewati</a>
    </div>
    <div style="float: left;width:50% ;">
        <a href="">Berikutnya</a>
    </div>
</div>
<?php echo form_close(); ?>