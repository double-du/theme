    <!-- Footer -->
    <footer class="bg-darker border-t border-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold text-xl">E</div>
                        <span class="ml-2 text-xl font-bold text-purple-400">Eduardo A. F.</span>
                    </div>
                    <p class="mt-4 text-gray-400">
                        <?php _e('Creating beautiful, functional digital experiences with a focus on user-centered design and cutting-edge technology.', 'eduardo-theme'); ?>
                    </p>
                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-100 mb-4"><?php _e('Quick Links', 'eduardo-theme'); ?></h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Home', 'eduardo-theme'); ?></a></li>
                        <li><a href="#skills" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Skills', 'eduardo-theme'); ?></a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Portfolio', 'eduardo-theme'); ?></a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Contact', 'eduardo-theme'); ?></a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-100 mb-4"><?php _e('Services', 'eduardo-theme'); ?></h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Web Development', 'eduardo-theme'); ?></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('UI/UX Design', 'eduardo-theme'); ?></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Mobile Apps', 'eduardo-theme'); ?></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition duration-300"><?php _e('Consulting', 'eduardo-theme'); ?></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; <span class="font-semibold year"><?php echo date('Y'); ?></span> Eduardo Augusto Furlaneti. <?php _e('All rights reserved.', 'eduardo-theme'); ?>
                </p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300"><?php _e('Privacy Policy', 'eduardo-theme'); ?></a>
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300"><?php _e('Terms of Service', 'eduardo-theme'); ?></a>
                    <a href="#" class="text-gray-500 hover:text-purple-400 text-sm transition duration-300"><?php _e('Cookies', 'eduardo-theme'); ?></a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <script>
        document.querySelector('.year').textContent = new Date().getFullYear();
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>