   
   <!-- === POST format find out === -->
 
 <?php
        $paged          = get_query_var( "paged" ) ? get_query_var( "paged" ) : 1;
        $posts_per_page = 2;
        $post_ids       = array( 58, 68, 43, 56, 81,70,38 );
        $_p             = new WP_Query( array(
            'posts_per_page' => $posts_per_page,
            'post__in'       => $post_ids,
            'orderby'        => 'post__in',
            'paged'          => $paged,

            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'post_format',
                    'field'    => 'slug',
                    'terms'    => array(
                        'post-forma-audio',
                        'post-forma-video',
                     ),

                ),
                'operator' => 'NOT IN',
            ),
        ) 
      );
        
        while ($_p->have_posts) {
            
            $_p->the_post();

      ?>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
        }
        wp_reset_query();
        ?>



     <?php 
        echo paginate_links( array(
            'total' => $_p->max_num_pages,
            'current' => $paged,
            'prev_next' => false,
        ) );
    ?>


<!-- source  

https://developer.wordpress.org/reference/classes/wp_query/#permission-parameters
http://man.hubwiz.com/docset/WordPress.docset/Contents/Resources/Documents/codex.wordpress.org/Class_Reference/WP_Query.html

-->