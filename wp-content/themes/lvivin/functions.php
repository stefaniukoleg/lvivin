<?php
    add_theme_support('title-tag'); // теперь тайтл управляется самим вп
    add_theme_support('post-thumbnails'); // включаем поддержку миниатюр

    //custom capabilityes
    require 'template-parts/custom-posts-types.php';

	add_image_size('600x400', 600, 400, true); // додаємо ще один розмір картинок 600x400 з обрізанням
	add_image_size('450x300', 450, 300, true); // додаємо ще один розмір картинок 450x300 з обрізанням
	add_image_size('300x200', 300, 200, true); // додаємо ще один розмір картинок 300x200 з обрізанням

	function short_post_desc( $charlength ) {        //function for display short content for posts
	    $excerpt = get_the_content();
	    if ( mb_strlen( $excerpt ) > $charlength ) {
	        $subex = mb_substr( $excerpt, 0, $charlength );
	        return $subex . '...';
	    }
	    else {
	        return $excerpt;
	    }
	}

	function short_post_title( $charlength, $post_id = null ) {        //function for display short title for posts
	    $excerpt = get_the_title( $post_id );
	    $excerpt = trim( $excerpt );
	    if ( mb_strlen( $excerpt ) > $charlength ) {
	        $subex = mb_substr( $excerpt, 0, $charlength );
	        return $subex . '...';
	    }
	    else {
	        return $excerpt;
	    }
	}

	function show_excursions() {
		echo '
			<div class="top-news">
                <a href="' . get_the_permalink() . '">
	                <div class="col l3">
	                    <img class="top-news-img img-border" src="' . get_the_post_thumbnail_url( '', '300x200' ) . '" alt="eng">
	                </div>
	                <div class="col l9">
	                    <div class="news-description news-big-sign white-text">' . get_the_title() . '"</div>
	                    <div class="news-description white-text">' . short_post_desc( 375 ) . '</div>
	                </div>
	                <div class="line">
	                    <div class="block-line"></div>
	                </div>
	            </a>
            </div>';
	}

