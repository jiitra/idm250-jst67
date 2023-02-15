<div class="content-block">
<?php

if (have_posts()){
    while(have_posts()){
        the_post();
        the_content();
    }
} else{
    echo 'no posts found';
}

?>
 </div>