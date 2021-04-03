<?php get_header(); ?> 
  
    <!-- Welcome section -->
    <section class="welcome grid">
        <div class="about">
             <h2 class="about__info">Space Enthusiast</br>& Php Developer</h2>
             <p class="leading"><?php the_field('about_info'); ?></p>
             <a class="button btn" href="#portfolio"><?php the_field('button_text'); ?></a>
        </div>
        <div class="image">
          <?php 
           $image = get_field('background_image');
            if( !empty( $image ) ): ?>
             <img class="image__item" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
           <?php endif; ?>
        </div>
    </section>

    <!-- Portfolio section -->
    <section class="portfolio">
        <h3 class="highlight">
        <?php the_field('project_highlight'); ?>
        </h3>
        <div class="projects grid">
            <a href="" class="project__item">
            <?php 
              $image = get_field('project_img-1');
               if( !empty( $image ) ): ?>
                <img class="project__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
             <?php endif; ?>
                <h4 class="project__name"> <?php the_field('project_name-1'); ?></h4>
            </a>
            <a href="" class="project__item">
            <?php 
               $image = get_field('project_img-2');
                if( !empty( $image ) ): ?>
                <img class="project__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
                <h4  class="project__name"><?php the_field('project_name-2'); ?></h4>
            </a>
            <a href="" class="project__item project__item__special">
            <?php 
               $image = get_field('project_img-3');
               if( !empty( $image ) ): ?>
                 <img class="project__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
                <h4  class="project__name"><?php the_field('project_name-3'); ?></h4>
            </a>
        </div>
    </section>

    <!-- Skill section -->
    <section class="skills">
         <h3 class="highlight">
            <?php the_field('skills_hightlight'); ?>         
         </h3>
        <ul class="grid skill">
          <li clss="skill__item">
          <?php 
               $image = get_field('skill_img-1');
               if( !empty( $image ) ): ?>
                 <img class="skill__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              <h4 class="skill__name">
                 <?php the_field('skill_name-1'); ?>
              </h4>
          </li>
          <li clss="skill__item">
          <?php 
               $image = get_field('skill_img-2');
                 if( !empty( $image ) ): ?>
                 <img class="skill__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              <h4 class="skill__name">
                 <?php the_field('skill_name-2'); ?>
              </h4>
          </li>
          <li clss="skill__item">
          <?php 
               $image = get_field('skill_img-3');
               if( !empty( $image ) ): ?>
                 <img class="skill__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              <h4 class="skill__name">
              <?php the_field('skill_name-3'); ?>
              </h4>
          </li>
          <li clss="skill__item">
          <?php 
               $image = get_field('skill_img-4');
               if( !empty( $image ) ): ?>
                 <img class="skill__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              <h4 class="skill__name">
                 <?php the_field('skill_name-4'); ?>
              </h4>
          </li>
        </ul>
    </section>

  <!-- Form section -->
    <section class="contact">
        <h3 class="contact__title"> <?php the_field('contact_highlight'); ?></h3>
        <p class="contact__info "><?php the_field('contact_info'); ?></p>
        <form class="form">
           <input class="form__item" type="text" placeholder="Enter your name">
           <input class="form__item" type="email" placeholder="Enter your email">
           <textarea class="form__item" placeholder="Enter your massage"></textarea>
           <a class="btn button" href="#"><?php the_field('contact_send'); ?></a>
        </form>
    </section>

<?php get_footer(); ?>