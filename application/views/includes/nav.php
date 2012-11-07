<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">            
        <div class="container">            
            <a class="brand" href="<?php echo base_url();?>"><font color="white">Agenda</font><font color="41ab34">Anda</font></a>
            <ul class="nav">
              <li><a href="#">Event</a></li>
              <li class="active"><a href="#">Buat Event</a></li>
            </ul>
            <?php 
            if($this->uri->segment(1, 0)==="register" ){
                }else{
                   if($this->uri->segment(1,0)==="user"){
                    ?>
                
                
                        <ul class="nav pull-right">
                        <li id="fat-menu" class="dropdown">                       
                        
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $thumb;?>" style="height: 20px;"/>&nbsp;
                            <?php echo $username;?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria labelledby="drop3">
                        <li><a tabindex="-1" href="#">action</a></li>
                        </ul>
                        </li>
                        </ul> 
                
                <form class="navbar-search pull-right">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
            <?php
                }else{    
            ?>
                
                 <div class="right">   
                    <a class="btn" href="<?php echo base_url();?>login">Login</a>
                    <a class="btn btn-primary" href="<?php echo base_url();?>register">Sign Up</a>
                 </div>
            <?php } 
                }
                 ?>
            
        </div>
    </div>
</div>    
<br /><br /><br />