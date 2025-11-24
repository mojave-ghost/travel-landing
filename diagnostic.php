<?php
/**
 * WordPress Diagnostic Check
 * 
 * Place this file in wp-content/themes/travel-landing/ 
 * Access via: yoursite.local/wp-content/themes/travel-landing/diagnostic.php
 */

echo "<h1>WordPress Diagnostic Check</h1>";
echo "<pre>";

// Check if WordPress is loaded
if ( defined( 'ABSPATH' ) ) {
    echo "✅ WordPress is loaded (ABSPATH defined)\n";
    echo "   ABSPATH: " . ABSPATH . "\n\n";
} else {
    echo "❌ WordPress NOT loaded\n";
    echo "   Trying to load WordPress...\n\n";
    
    // Try to load WordPress
    $wp_load_path = '../../../wp-load.php';
    if ( file_exists( $wp_load_path ) ) {
        require_once( $wp_load_path );
        echo "✅ WordPress loaded successfully\n\n";
    } else {
        echo "❌ Could not find wp-load.php\n";
        echo "   Current directory: " . __DIR__ . "\n";
        die();
    }
}

// Check theme files
echo "Theme Files Check:\n";
$theme_files = array(
    'style.css',
    'index.php',
    'functions.php',
    'header.php',
    'footer.php',
);

foreach ( $theme_files as $file ) {
    $path = __DIR__ . '/' . $file;
    if ( file_exists( $path ) ) {
        echo "✅ {$file} - " . filesize( $path ) . " bytes\n";
    } else {
        echo "❌ {$file} - MISSING\n";
    }
}

echo "\n";

// Check if theme is active
if ( function_exists( 'wp_get_theme' ) ) {
    $current_theme = wp_get_theme();
    echo "Current Theme: " . $current_theme->get( 'Name' ) . "\n";
    echo "Theme Version: " . $current_theme->get( 'Version' ) . "\n";
    echo "Theme Status: " . ( $current_theme->get( 'Name' ) === 'Travel Landing' ? '✅ ACTIVE' : '❌ NOT ACTIVE' ) . "\n\n";
}

// Check WordPress version
if ( function_exists( 'get_bloginfo' ) ) {
    echo "WordPress Version: " . get_bloginfo( 'version' ) . "\n";
    echo "Site URL: " . get_bloginfo( 'url' ) . "\n";
    echo "Site Name: " . get_bloginfo( 'name' ) . "\n\n";
}

// Check PHP version
echo "PHP Version: " . phpversion() . "\n";
echo "PHP Memory Limit: " . ini_get( 'memory_limit' ) . "\n\n";

// Check for common issues
echo "Common Issues Check:\n";

// Check if index.php exists in root
if ( file_exists( ABSPATH . 'index.php' ) ) {
    echo "✅ Root index.php exists\n";
} else {
    echo "❌ Root index.php MISSING (WordPress core issue!)\n";
}

// Check if wp-config.php exists
if ( file_exists( ABSPATH . 'wp-config.php' ) ) {
    echo "✅ wp-config.php exists\n";
} else {
    echo "❌ wp-config.php MISSING\n";
}

// Check if theme directory is writable
if ( is_writable( __DIR__ ) ) {
    echo "✅ Theme directory is writable\n";
} else {
    echo "⚠️  Theme directory is not writable\n";
}

echo "\n</pre>";

echo "<h2>Next Steps:</h2>";
echo "<ul>";
echo "<li>If WordPress is NOT loaded: Check your WordPress installation</li>";
echo "<li>If theme is NOT active: Go to Appearance → Themes and activate 'Travel Landing'</li>";
echo "<li>If root index.php is missing: Your WordPress core files are corrupted</li>";
echo "</ul>";
