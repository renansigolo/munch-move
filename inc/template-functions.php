<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Munch_&_Move
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function munch_move_body_classes($classes)
{
<<<<<<< HEAD
<<<<<<< HEAD
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}
=======
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

=======
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

>>>>>>> staging
    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }
<<<<<<< HEAD
>>>>>>> develop
=======
>>>>>>> staging

    return $classes;
}
add_filter('body_class', 'munch_move_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function munch_move_pingback_header()
{
<<<<<<< HEAD
<<<<<<< HEAD
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'munch_move_pingback_header');

function mycustom_wp_footer()
{
	?>
	<script type="text/javascript">
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('11' == event.detail.contactFormId) {
				document.querySelector('.hero-form-fields').style.display = 'none'
			}
		}, false);
	</script>
<?php
}
add_action('wp_footer', 'mycustom_wp_footer');
=======
    if (is_singular() && pings_open()) {
        printf(
            '<link rel="pingback" href="%s">',
            esc_url(get_bloginfo('pingback_url'))
        );
    }
}
add_action('wp_head', 'munch_move_pingback_header');
>>>>>>> develop
=======
    if (is_singular() && pings_open()) {
        printf(
            '<link rel="pingback" href="%s">',
            esc_url(get_bloginfo('pingback_url'))
        );
    }
}
add_action('wp_head', 'munch_move_pingback_header');
>>>>>>> staging
