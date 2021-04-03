<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PortfolioWeb</title> 
    <?php wp_head();?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/47c392d60b.js" crossorigin="anonymous"></script>
</head>
<body>

   <!-- Navigation -->
   <nav class="nav grid">
       <h1 class="logo"><?php the_field('logo_text'); ?></h1>
       <ul class="menu">
           <li class="menu__item menu__item--home"><a href=".portfolio" class="menu__link"><?php the_field('nav_item-1'); ?></a></li>
           <li class="menu__item"><a href=".skills"   class="menu__link"><?php the_field('nav_item-2'); ?></a></li>
           <li class="menu__item"><a href=".contact"  class="menu__link"><?php the_field('nav_item-3'); ?></a></li>
       </ul>
    </nav>