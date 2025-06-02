<section id="home" class="relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-100 mb-6">
                    <span class="text-purple-400 glow"><?php _e('Hi, I\'m', 'eduardo-theme'); ?></span> <?php _e('Eduardo Augusto Furlaneti', 'eduardo-theme'); ?>
                </h1>
                <p class="text-lg md:text-xl text-gray-400 mb-8 max-w-lg">
                    <?php _e('A passionate developer crafting digital experiences with clean, efficient code.', 'eduardo-theme'); ?>
                </p>
                <div class="flex space-x-4">
                    <a href="#contact" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-500 transition duration-300 font-medium shadow-lg hover:shadow-xl glow-box">
                        <?php _e('Get in Touch', 'eduardo-theme'); ?>
                    </a>
                    <a href="#portfolio" class="px-6 py-3 border border-purple-600 text-purple-400 rounded-lg hover:bg-gray-800 transition duration-300 font-medium">
                        <?php _e('View My Work', 'eduardo-theme'); ?>
                    </a>
                </div>
            </div>
            <div class="relative flex justify-center">
                <div class="w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-gray-900 rounded-full flex items-center justify-center floating glow-box">
                    <div class="w-56 h-56 md:w-72 md:h-72 lg:w-80 lg:h-80 bg-gray-800 rounded-full flex items-center justify-center">
                        <div class="w-48 h-48 md:w-60 md:h-60 lg:w-72 lg:h-72 bg-gray-700 rounded-full flex items-center justify-center">
                            <?php
                            $profile_image = get_theme_mod('profile_image', get_template_directory_uri() . '/assets/images/profile.jpg');
                            ?>
                            <img src="<?php echo esc_url($profile_image); ?>" alt="Profile" class="w-40 h-40 md:w-52 md:h-52 lg:w-64 lg:h-64 rounded-full object-cover border-4 border-gray-800">
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-5 left-10 md:left-20 bg-gray-800 px-4 py-2 rounded-lg shadow-lg border border-gray-700">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-300"><?php _e('Currently working on new projects', 'eduardo-theme'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>