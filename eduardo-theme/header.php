<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0a0a0a',
                        darker: '#050505',
                        purple: {
                            light: '#a855f7',
                            dark: '#7e22ce'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom CSS for dark tech pattern */
        body {
            background-color: #0a0a0a;
            color: #e5e7eb;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(90deg, rgba(168, 85, 247, 0.05) 1px, transparent 1px),
                linear-gradient(rgba(168, 85, 247, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            z-index: -1;
            opacity: 0.3;
        }
        
        .tech-border {
            position: relative;
        }
        
        .tech-border::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #a855f7, transparent);
        }
        
        .tech-card {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #111111, #0d0d0d);
            border: 1px solid #1e1e1e;
        }
        
        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(168, 85, 247, 0.2);
            border-color: #a855f7;
        }
        
        .tech-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.1) 0%, rgba(168, 85, 247, 0) 50%);
        }
        
        .circuit-pattern {
            background-image: 
                radial-gradient(circle, rgba(168, 85, 247, 0.1) 1px, transparent 1px),
                radial-gradient(circle, rgba(168, 85, 247, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Contact form styles */
        .contact-form input,
        .contact-form textarea {
            transition: all 0.3s ease;
            background-color: #111111;
            border: 1px solid #1e1e1e;
            color: #e5e7eb;
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.2);
            outline: none;
        }
        
        .contact-form button:hover {
            transform: translateY(-2px);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0d0d0d;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #7e22ce;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a855f7;
        }
        
        /* Glow effect */
        .glow {
            text-shadow: 0 0 10px rgba(168, 85, 247, 0.5);
        }
        
        .glow-box {
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
    </style>
</head>
<body <?php body_class('font-sans antialiased'); ?>>
    <!-- Navigation -->
    <nav class=" shadow-sm backdrop-blur-lg sticky top-0 z-50 border-b border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        &nbsp;
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="#home" class="text-purple-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?php _e('Home', 'eduardo-theme'); ?></a>
                    <a href="#skills" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?php _e('Skills', 'eduardo-theme'); ?></a>
                    <a href="#portfolio" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?php _e('Portfolio', 'eduardo-theme'); ?></a>
                    <a href="#contact" class="text-gray-400 hover:text-purple-300 px-3 py-2 rounded-md text-sm font-medium"><?php _e('Contact', 'eduardo-theme'); ?></a>
                    <!-- Seletor de idioma -->
                    <div class="flex space-x-2">
                        <a href="?lang=pt" class="text-xs px-2 py-1 <?= $lang === 'pt' ? 'bg-purple-600 text-white' : 'bg-gray-800 text-gray-300' ?> rounded">PT</a>
                        <a href="?lang=en" class="text-xs px-2 py-1 <?= $lang === 'en' ? 'bg-purple-600 text-white' : 'bg-gray-800 text-gray-300' ?> rounded">EN</a>
                    </div>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-300 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only"><?php _e('Open main menu', 'eduardo-theme'); ?></span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-darker border-t border-gray-800">
                <a href="#home" class="text-purple-400 block px-3 py-2 rounded-md text-base font-medium"><?php _e('Home', 'eduardo-theme'); ?></a>
                <a href="#skills" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?php _e('Skills', 'eduardo-theme'); ?></a>
                <a href="#portfolio" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?php _e('Portfolio', 'eduardo-theme'); ?></a>
                <a href="#contact" class="text-gray-400 hover:text-purple-300 block px-3 py-2 rounded-md text-base font-medium"><?php _e('Contact', 'eduardo-theme'); ?></a>
            </div>
        </div>
    </nav>