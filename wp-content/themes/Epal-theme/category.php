


<!--Lấy Bài Viết Của Categories Mặc Định-->
<?php
    $id = get_queried_object_id();
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $list = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'cat' => $id,
        'paged' => $paged,
    ]);
    while($query->have_posts()) : $query->the_post()
?>





<?php endwhile; ?>
