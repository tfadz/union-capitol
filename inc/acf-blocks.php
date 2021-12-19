<?php
// ACF Blocks

function acf_blocks_init()
{
  
  // Add Blocks Here
  acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Featured Hero'),
    'render_template'   => '/template-parts/blocks/hero.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'content_block',
    'title'             => __('Content Block'),
    'render_template'   => '/template-parts/blocks/content-block.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'team_gallery',
    'title'             => __('Team Gallery'),
    'render_template'   => '/template-parts/blocks/gallery-team.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'portfolio_gallery',
    'title'             => __('Portfolio Gallery'),
    'render_template'   => '/template-parts/blocks/gallery-portfolio.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'image_two_col',
    'title'             => __('Image + Two Column Block'),
    'render_template'   => '/template-parts/blocks/image-two-col.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'video_slider',
    'title'             => __('Video Slider Block'),
    'render_template'   => '/template-parts/blocks/video-slider.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  acf_register_block_type(array(
    'name'              => 'cards',
    'title'             => __('Cards'),
    'render_template'   => '/template-parts/blocks/cards.php',
    'category'          => 'union-blocks',
    'mode' => 'edit',
    'icon' => array(
      // Specifying a background color to appear with the icon e.g.: in the inserter.
      'background' => '#004279',
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#fff',
      // Specifying a dashicon for the block
      'src' => 'bank',
    ),
  ));
  
  
}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'acf_blocks_init');
}

// add_filter( 'block_categories', function( $categories, $post ) {
//   return array_merge(
//     $categories,
//     array(
//       array(
//         'slug'  => 'union-blocks',
//         'title' => 'Union Capitol Blocks',
//         'icon' => 'dashicons-bank',
//       ),
//     )
//   );
// }, 10, 2 );


