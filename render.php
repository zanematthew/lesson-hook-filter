<?php

function lesson_filter_render(){ ?>
    <div class="wrap">
        <h2><?php _e('Lesson Filter', 'lesson_filter'); ?></h2>
        <?php lesson_filter(); ?>
    </div>
<?php }