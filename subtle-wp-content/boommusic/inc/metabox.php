<?php 


function zboom_favorite_food(){

    add_meta_box(
        'favorite-food',
        'What is your favorite Food ?',
        'tanmoy_metabox_output',
        'page',
        'normal'
    );
    add_meta_box(
        'favorite-car',
        'What is your favorite Car ?',
        'tanmoy_metabox_output_car',
        'zoom-slider',
        'normal'
    );

}
add_action('add_meta_boxes','zboom_favorite_food');


function tanmoy_metabox_output($post){ ?>

   <label for="food">Please Type your Favorite food</label>
   <p><input name="food-n" value="<?php echo get_post_meta($post->ID, 'food-n', true);?>" class="widefat" type="text" placeholder="Favorite Food"/></p>

    <label for="bike">Please Type your Favorite Bike</label>
   <p><input name="bike" value="<?php echo get_post_meta($post->ID, 'bike', true);?>" class="widefat" type="text" placeholder="Which is your favorite bike"/></p>

<?php } 



function tanmoy_metabox_output_car($post){
    echo "Range Rover is my favorite car";
}



function meta_for_database($post_id){
    update_post_meta($post_id, 'food-n', $_POST['food-n']);
    update_post_meta($post_id, 'bike', $_POST['bike']);
}
add_action('save_post', 'meta_for_database');