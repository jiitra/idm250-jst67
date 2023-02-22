<?php get_header(); ?>

<div class="title">
   <h1> <?php echo get_the_title(); ?> </h1>
</div>
<?php get_template_part('components/content');

$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

if($terms){
    foreach ($terms as $term){
        echo "<span>($term->name)</span>";
    }
}
?>

<?php get_footer(); ?>