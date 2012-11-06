<div id="">
    <?php foreach($posts as $post) : ?>
                <div>
                        <?php echo  $post->IDACARA; ?> <br />
                        <?php echo  $post->NAMAACARA; ?>
                        <?php //echo anchor('user/view/'.$post->IDUSER,'Read More'); ?>
                </div>
    <?php endforeach; ?>
</div>