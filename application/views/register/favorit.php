<div class="span5 boxes registerBG">
    <div class="row-fluid"><div class="span12"><img src="<?php echo base_url();?>img/reg/step-3.png" /></div></div>    
    <div class="row-fluid">
        <div class="span12"><hr /></div>
    </div>
    <div class="row-fluid">
        <span class="span12 lead">
            Pilih Kategori yang menjadi favorit anda
        </span>
    </div>
    <?php 
        echo form_open('register/add_fav');
    ?>
    <div class="row-fluid show-grid">
        <?php 
        
            $i=0;
            foreach($kategori as $dk){
                $i++;
                echo "<div class='span3' rel='tooltip' data-placement='top' data-original-title='".$dk->DESKRIPSIKATEGORI."'>
                        <label class='checkbox'>"
                        .form_checkbox('fav[]', $dk->IDKATEGORI).$dk->NAMAKATEGORI
                        ."</label></div>";
                if($i==4){
                    $i=0;
                    echo '</div><div class="row-fluid show-grid">';
                }
            }
        ?>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $("[rel=tooltip]").tooltip();
        });
    </script>
    <div class="row-fluid">
        <div class="span4"></div>     
        <div class="span8 right">
            
            <button class="btn btn-link">Lewati</button>&nbsp;
            <input type="submit" value="Langkah Berikutnya" class="btn btn-success" />
            
        </div>
    </div>
    <?php echo form_close();?>
</div>
