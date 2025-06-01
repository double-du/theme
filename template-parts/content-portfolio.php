<section id="portfolio" class="py-20 bg-darker circuit-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-100 mb-4 tech-border relative pb-2 inline-block"><?php _e('My Portfolio', 'eduardo-theme'); ?></h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto"><?php _e('Check out some of my recent projects.', 'eduardo-theme'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $portfolio_query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
            ));
            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
                <div class="tech-card rounded-xl overflow-hidden">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover opacity-80 hover:opacity-70 transition duration-300')); ?>
                        <?php else : ?>
                            <div class="w-full h-full bg-gray-700 flex items-center justify-center">
                                <span class="text-gray-400"><?php _e('No Image', 'eduardo-theme'); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-purple-600 opacity-0 hover:opacity-20 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-100"><?php the_title(); ?></h3>
                            <span class="bg-gray-800 text-purple-400 text-xs font-medium px-2.5 py-0.5 rounded"><?php the_terms(get_the_ID(), 'technology'); ?></span>
                        </div>
                        <p class="text-gray-400 mb-4"><?php the_excerpt(); ?></p>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $technologies = get_the_terms(get_the_ID(), 'technology');
                            if ($technologies && !is_wp_error($technologies)) :
                                foreach ($technologies as $tech) :
                            ?>
                                <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded"><?php echo esc_html($tech->name); ?></span>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-gray-400">' . __('No projects found.', 'eduardo-theme') . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>