<div class="content-block">
<?php

if (have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('components/archive-img');
    }
} else{
    echo 'no posts found';
}

?>
 </div>