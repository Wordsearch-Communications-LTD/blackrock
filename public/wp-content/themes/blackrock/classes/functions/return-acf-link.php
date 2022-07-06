<?php 
    function return_afc_link($link, $classes){
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="<?php echo $classes ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 16.4853L28 16.4853" stroke="black" stroke-width="2"/> <path d="M19.7861 24.9706L28.2713 16.4853L19.7861 8.00001" stroke="black" stroke-width="2"/> </svg></a>
        <?php
        endif;
    }
?>