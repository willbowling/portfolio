<? include ('./includes/head_main.php') ?>
<br />
	<div id="content">
		
<?php if ($feed->data) { ?>

    <!-- Get the title of the whole feed and link it back to the website -->
    <h2>
        <a href="<?php echo $feed->get_feed_link(); ?>">
            <?php echo $feed->get_feed_title(); ?>
        </a>
    </h2>

    <!-- Loop through each news item in the feed, and limit the quantity to either 5, or as many items as are in the feed - whichever is less. -->
    
    <?php
    $max = $feed->get_item_quantity(5);
    for ($x = 0; $x < $max; $x++) {
	    $item = $feed->get_item($x);
    ?>

        <!-- Get the title of the news item and link it back to the original post -->
        <h3>
            <a href="<?php echo $item->get_permalink(); ?>">
                <?php echo $item->get_title(); ?>
            </a>
        </h3>

        <!-- Get the date that it was posted -->
        <p><?php echo $item->get_date('j M Y'); ?></p>

        <!-- Show the news posting -->
        <p><?php echo $item->get_description(); ?></p>

        <!-- Add links to add this post to one of a handful of services. -->
        <p>
            <a href="<?php echo $item->add_to_delicious(); ?>">Del.icio.us</a> |
            <a href="<?php echo $item->add_to_digg(); ?>">Digg this!</a> |
            <a href="<?php echo $item->add_to_newsvine(); ?>">Newsvine</a>
        </p>
<br /><br />
    <!-- Stop looping through each item once we've gone through all of them. -->
    <?php } ?>

<!-- From here on, we're no longer using data from the feed. -->
<?php } ?>


	</div>
	
<? include ('includes/footer_main.php') ?>