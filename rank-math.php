<?php

add_filter( 'rank_math/researches/toc_plugins', function( $toc_plugins ) {
   $toc_plugins['plugin-directory/plugin-filename.php'] = 'Plugin Name';
return $toc_plugins;
});