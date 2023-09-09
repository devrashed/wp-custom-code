
<div class="pagination-dropdown">
    <select id="page-dropdown" onchange="if (this.value) window.location.href=this.value;">
        <?php
        global $wp_query;
        $wp_total_pages = $wp_query->max_num_pages;
        
        for ($i = 1; $i <= $wp_total_pages; $i++) {
            $page_link = get_pagenum_link($i);
            $select_page = '<option value="' . $page_link . '"';
            
            if ($i === get_query_var('paged')) {
                $select_page .= ' selected';
            }
            
           $select_page .= '>'.$i.'</option>';
           echo $select_page;
        }
        ?>
    </select>
</div>


<script>

 // Get a reference to the dropdown element
var dropdown = document.getElementById('page-dropdown');

// Add an event listener to the dropdown
dropdown.addEventListener('change', function() {
    // Get the selected value from the dropdown
    var selectedValue = dropdown.value;
    
    // Check if a valid option is selected (not empty)
    if (selectedValue) {
        // Change the current page's URL to the selected value
        window.location.href = selectedValue;
    }
});

</script>    

<?php 
function rk_paigination(){

echo '<div class="pagination-dropdown">';
echo '<select id="page-dropdown" onchange="if (this.value) window.location.href=this.value;">';
        
        global $wp_query;
        $wp_total_pages = $wp_query->max_num_pages;
        
        for ($i = 1; $i <= $wp_total_pages; $i++) {
            $page_link = get_pagenum_link($i);
            $select_page = '<option value="' . $page_link . '"';
            
            if ($i === get_query_var('paged')) {
                $select_page .= ' selected';
            }
            
            $select_page .= '>'.$i.'</option>';
            echo $select_page;
        }
        
    echo '</select>';
echo '</div>';
}


add_shortcode('show-paigination', 'rk_paigination');


?>			


<!-- ==============  END THE PAIGINATION ======================-->




<!-- ==============  START SINGLE CATEGORY ======================-->



<?php 
    $category_title = single_cat_title('', false);
    echo '<h1><a href="' . get_category_link(get_queried_object_id()) . '">' . $category_title . '</a></h1>';
?>



<!-- ==============  END SINGLE CATEGORY ======================-->


