<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  
   
    <?php wp_head(); ?>

        <title>test</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
            <a href="<?php echo site_url(''); ?>"

            >Home</a>
            </li>
            <li> <a href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li> <a href="<?php echo site_url('/projects'); ?>">Projects</a>
            </li>
            <li> <a href="<?php echo site_url('/about'); ?>">About</a>
            </li>
            <div class="searchbox-slide-menu">
               <?php get_seacrh_form(); ?>
           </div>
        </ul>

    </div>
   
    <nav>
        <div id="logo.img">
            <a href="<?php echo site_url('');?>">
                <img src="<?php echo get_template_directory_uri();?>img/assassins_creed_iv_black_flag_edward_kenway_2-wallpaper-1366x768.jpg" alt="Joshua">
                </a>
        </div>
        <div id="menu -icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
            <a class="active" href="index.html">Home</a>
            </li>
            <li> <a href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li> <a href="<?php echo site_url('/projects'); ?>">Projects</a>
            </li>
            <li> <a href="<?php echo site_url('/about'); ?>">About</a>
            </li>
            <li>
                <div id="search icon">
                    <i class= "fas fa-search"></i>
                </div>
                </li>
             </ul>
    </nav>

    <div id="searchbox">
    <?php get_seacrh_form(); ?> 
    </div>
    <?php if(!is_front_page()) { ?>
    </main>
            <?php } ?>

    