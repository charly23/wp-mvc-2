<?php
    $userdata = get_userdata( get_current_user_id() );
?>

<div id="wp-mvc__wrap">

    <?php
        $user_role = user_control::get_role();
    ?>
    
    <h2 class="wp-mvc_manager-title">
        <?php 
            _e( 'WP MVC : Help?', 'wp-mvc' ); 
        ?>
    </h2>
    
    <div class="ajaxs-results"></div>
    
    <div class='wp-mvc__help_wrap'>
        
        <?php
            _e( 'Hello World!', 'label' )
        ?>

    </div>


</div>

