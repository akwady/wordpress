

<!--Lấy bài Viết Của Taxonomy-->
<?php
    $id = get_queried_object_id();
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $list = [
        'post_type' => 'product',
        'posts_per_page' => 3,
        'paged' => $paged,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'taxonomy',
                'field' => 'id',
                'terms' => $id,
            )),
    ];
    $query = new WP_Query($list);
    while($query->have_posts()) : $query->the_post()
?>


<?php endwhile; ?>
