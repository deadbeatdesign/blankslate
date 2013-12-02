<?php get_header(); ?>
<section id="content" role="main">



        <div class="wrapright"> 	 
         
            <div class="right">
                <div id="imageHolder">
                
                
					<p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?></p>
                    
                    
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>  
                    
                             
                </div>
            </div>
            
        </div>    



        <div class="left">
            <div id="logo">
            	<a href="http://marcusmcsherrydesign.com/"><img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/blankslate/images/marcus_logo.gif" /></a></div>

            <nav id="menu" role="navigation">
            <?php wp_nav_menu( array( 'menu' => 'Menu' ) ); ?>
            </nav>
        </div> 
        
        


</section>

<?php get_footer(); ?>