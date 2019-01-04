<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package parallax-one
 */
$paralax_one_full_width_template = get_theme_mod( 'paralax_one_full_width_template' );
if ( isset( $paralax_one_full_width_template ) && $paralax_one_full_width_template != 1 ) {
	get_header(); ?>

		</div>
		<!-- /END COLOR OVER IMAGE -->
		<?php parallax_hook_header_bottom(); ?>
	</header>
	<!-- /END HOME / HEADER  -->
	<?php parallax_hook_header_after(); ?>

	<?php parallax_hook_content_before(); ?>
	<div id="content" class="content-warp">
		<?php parallax_hook_content_top(); ?>
		<div class="container">
			<div id="primary" class="content-area 
			<?php
			if ( is_active_sidebar( 'sidebar-1' ) ) {
				echo 'col-md-8';
			} else {
				echo 'col-md-12';}
?>
">
				<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

				<?php parallax_hook_page_before(); ?>
				<?php
				while ( have_posts() ) :
					the_post();  
?>

					<?php  
					
					
					$post_slug=$post->post_name; 
					if($post_slug=='manage-payment'){
						
					 echo '<h1 class="entry-title single-title" itemprop="headline">Manage Payment</h1>';
							$results = $wpdb->get_results( "SELECT * FROM wp_db7_forms where form_post_id =29"); // Query to fetch data from database table and storing in $results
							if(!empty($results))                        
							{    
								echo "<div style='width:80%;'><table border='0' style='border:1px solid red'>
								<thead style='background-color:#DDD;'>
									<tr>
									  <th>Your Reference</th>
									  <th>Pay From</th>
									  <th>Pay To</th>
									  <th>Amount</th>
									  <th>Payment Amount</th>
									  <th>Debit Amount</th>
									  <th>Payment Scheduele</th>
									  <th>Debit Date</th>
									  <th>Value Date</th>
									  
									  
									</tr>
								  </thead>"; 
								echo "<tbody>";     
 
							  foreach($results as $row) { 
							  $rsset = unserialize($row->form_value);
							 
							    echo "<tr style='background-color:#D7F1EF;'>";                           // Adding rows of table inside foreach loop
							    echo "<td>" . $rsset['yourname'] . "</td>";
								echo "<td >" . $rsset['PayFrom'] . "</td>";   //fetching data from user_ip field
								echo "<td>" . $rsset['PayTo'] . "</td>";
								echo "<td>" . $rsset['amount'][0] . "</td>";
								echo "<td>" . $rsset['PAYAMTTYPE'].$rsset['text-629'] . "</td>";
								echo "<td>" . $rsset['DEBITAMTTYPE'] .$rsset['text-630']. "</td>";
								echo "<td>" . $rsset['DEBITDATE'][0] . "</td>";
								//echo "<td>" . $rsset['DEBITDATE'] . "</td>";
								echo "<td>" . $rsset['VALUEDATE'] . "</td>";
								echo "<td>" . $rsset['PAYEMTNTYPEM'][0] . "</td>";		 
								echo "</tr>";
								}  
								echo "</tbody>";
								echo "</table></div>"; 
							}
						
					}else{					
						get_template_part( 'content', 'page' ); 					
					} ?>   
					

					<?php
						// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;
					?>

				<?php endwhile; ?>
				<?php parallax_hook_page_after(); ?>

				</main><!-- #main -->
			</div><!-- #primary -->
			<?php  
				global $post;
				$post_slug=$post->post_name;
				if($post_slug !='manage-payment'){
					get_sidebar(); 
				}
				?>

		</div>
		<?php parallax_hook_content_bottom(); ?>
	</div><!-- .content-wrap -->
	<?php parallax_hook_content_after(); ?>
	<?php get_footer(); ?>
	<?php
} else {
	include( 'template-fullwidth.php' );
}// End if().
