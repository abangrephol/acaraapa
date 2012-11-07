<div class="span5 boxes registerBG">
    <div class="row-fluid"><div class="span12"><img src="<?php echo base_url();?>img/reg/step-2.png" /></div></div>    
    <div class="row-fluid">
        <div class="span12"><hr /></div>
    </div>
    <div class="row-fluid">
        <div class="span6">        
            <div class="thumbnail">
                <img src="<?php 
                    echo base_url();
                    if($foto!=""){
                        echo "duser/images/".$foto.".jpg";
                    }else{
                        echo "img/reg/def-foto.png";
                    }
                ?>" />
                
            </div>
        </div>
        <div class="span6">
            <div class="span12 center">
                <h4>
                Atur Foto Profil Anda
                </h4>
                <span class="muted">Dari komputer anda</span>              
                <span>
                    <?php echo form_open_multipart('upload/do_upload');?>                    
                    <input type="file" name="userfile" size="20"  />                    
                    <br />                                       
                    <input type="submit" value="Upload" class="btn" />                    
                    <?php echo form_close();?></span>
                <br />
                               
            </div>            
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4"></div>     
        <div class="span8 right">
            <?php echo form_open("register/favorit");?>
            <button class="btn btn-link">Lewati</button>&nbsp;
            <input type="submit" value="Langkah Berikutnya" class="btn btn-success <?php if($foto!="")echo "";else echo "disabled";?>" />
            <?php //echo form_submit('submit','Langkah Berikutnya','class="btn btn-success disabled"');?>
            <?php echo form_close();?>
        </div>
    </div>
  
</div>
