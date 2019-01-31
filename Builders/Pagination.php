<?php

namespace Builders;

/**
 * 
 */
class Pagination
{
	
	public function __construct()
	{
		add_filter('navigation_markup_template', array($this, 'setPagionationTemplate'));
	}

	public function setPagionationTemplate($template)
    {
        return '
        <nav class="navigation %1$s" role="navigation">
            <div class="nav-links">%3$s</div>
        </nav>    
        ';
    }

    public function createPagination()
    {
    	the_posts_pagination(array(
			'show_all'     => false,
			'end_size'     => 1,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __('«'),
			'next_text'    => __('»'),
			'add_args'     => false,
			'add_fragment' => '',
			'screen_reader_text' => false,
		));
		wp_reset_query();
    }
}