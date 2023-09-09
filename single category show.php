  
<!-- ==============  Start Last category Show  ======================-->

  <?php
        $categories = get_the_category();
        if ($categories) {
        echo '<div class="post-categories">';
        $lastCategory = end($categories); 
        echo '<a href="' . get_category_link($lastCategory->term_id) . '">' . $lastCategory->name . '</a>';
        echo '</div>';
        }
  ?>


<!-- ==============  END Last category Show  ======================-->