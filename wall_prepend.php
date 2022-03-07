<?php

if (!defined('WALL_INCLUDED')) {

    # We explicitly tell wurfl_class to use cache.php.
    # From PHP_Tools by Andrea. 
    # WARNING: This fails with:
    #   Notice: Constant LOG_LEVEL already defined in [..path..]/wurfl/wurfl_class.php on line 89
    ### define('LOG_LEVEL', 0);
    
    # Shall we use classic PHP Tools or Tera WURFL?
    define('WALL_USE_TERA_WURFL', false);

    # Configuration of PHP Tools or Tera WURFL by Steve Kamerman
    if (defined('WALL_USE_TERA_WURFL') && WALL_USE_TERA_WURFL) {
        require_once(dirname(__FILE__) . '/tera-wurfl/tera_wurfl_config.php');
    } else {
        require_once(dirname(__FILE__) . '/wurfl/wurfl_config.php');
    }
    
    # For debug purporses. If you see following line uncommented, delete it or comment
    # it out. This is needed only, if Wall.php and Wall directory resides outside
    # include_path (current folder is NOT in include path by default).
    #set_include_path('.');
    
    # We parse HTTP request's Accept header to make sure, that unknown
    # devices get markup which best matches to what they expect.
    define('WALL_PARSE_HTTP_ACCEPT', true);

    # Let's define that WALL has already been included.
    define('WALL_INCLUDED', true);

    # And following lines are ALL you need :)
    require_once('Wall.php');
    $wall = new Wall();
    
}
?>