<?php get_header(); ?>

    <div id="banner">
        <h1>Wellcome</h1>
        <h3>Joshua The Great</h3>
    </div>
    <main>
        <a href="<?php echo site_url('/blog'); ?>" >
            <h2 class="section-heading">All Blogs</h2>
        </a>
        <section>

          <?php 

          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 2,
        
          );

          $blogposts = new wp_query($args);

          while ($blogposts->have_posts()) {
              $blogposts->the_post();
          
          ?>

            <div class="card">
            <div class="card-image">
                <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_id); ?>"
                     alt="card image">

                </a>
             </div> 
            </div>
            <div class="card-description">
                <a href="<?php the_permalink() ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
             </p>
             <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
          </div>
        </div>

        <?php }
            wp_reset_query(); ?>
            
        </section>

        <h2 class="section-heading">all projects </h2?>
        <section>
            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="img/wall_e_3-wallpaper-1366x768.jpg" alt="card image">
    
                    </a>
                 </div> 
                </div>
                <div class="card-description">
                    <a href="#">
                        <h3>The Blog Title</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores molestias possimus est optio, ut voluptate ad a dolores doloribus consequuntur, magnam porro incidunt aperiam in tempore soluta officia obcaecati?
                 </p>
                 <a href="#" class="btn-readmore">Read more</a>
                </div>
        </section>
         <h2 class="section-heading">All Projects</h2>
        <section>
            <div class="card">
            <div class="card-image">
                <a href="#">
                    <img src="img/wall_e_4-wallpaper-1366x768.jpg" alt="card image">

                </a>
             </div> 
            </div>
            <div class="card-description">
                <a href="#">
                    <h3>The project Title</h3>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores molestias possimus est optio, ut voluptate ad a dolores doloribus consequuntur, magnam porro incidunt aperiam in tempore soluta officia obcaecati?
             </p>
             <a href="#" class="btn-readmore">Read more</a>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="img/assassins_creed_iv_black_flag_edward_kenway_2-wallpaper-1366x768.jpg" alt="card image">
    
                    </a>
                 </div> 
                </div>
                <div class="card-description">
                    <a href="#">
                        <h3>The project Title</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores molestias possimus est optio, ut voluptate ad a dolores doloribus consequuntur, magnam porro incidunt aperiam in tempore soluta officia obcaecati?
                 </p>
                 <a href="#" class="btn-readmore">Read more</a>
                </div>
        </section>
        <h2 class="section-heading">source code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem temporibus, quis porro dignissimos saepe praesentium cumque doloribus laborum, maiores totam dolor ad dolores mollitia eaque ea veniam explicabo necessitatibus tenetur.

            </p>
            <a href="#" class="btn-readmore">Github Profile</a>         
        </section>
       
        <?php get_footer(); ?>