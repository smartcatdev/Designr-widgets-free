<?php 
namespace buildr;
?>

<div class="col-sm-12">
    
    <h3><?php attr( $title ); ?></h3>
    <p><?php html( $details ); ?></p>
    
    <?php button( $btn_text, $btn_url, $btn_style, $btn_size ); ?>    
    
    <div class="video-cta-wrapper stacked">
        <iframe src="https://www.youtube.com/embed/<?php attr( $video ) ?>?autoplay=<?php echo $autoplay == 'on' ? 1 : 0; ?>&showinfo=0&controls=<?php echo $controls == 'on' ? 1 : 0; ?>&loop=<?php echo $loop == 'on' ? 1 : 0; ?>"
                width="100%"
                height="<?php attr( $height ) ?>" allow="autoplay; encrypted-media">
        </iframe>
    </div>
    
</div>