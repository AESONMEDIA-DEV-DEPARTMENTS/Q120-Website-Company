<?php
/**
 * The class contain blog functions.
 */

class Atiframebuilder_Blog {

    public function __construct() {

        add_action( 'atiframebuilder_single_template', array( 'Atiframebuilder_Blog', 'single_template' ) );
        add_action( 'atiframebuilder_single_template_1', array( 'Atiframebuilder_Blog', 'single_template_1' ) );
        add_action( 'atiframebuilder_single_template_2', array( 'Atiframebuilder_Blog', 'single_template_2' ) );

	    add_action( 'atiframebuilder_archive_template', array( 'Atiframebuilder_Blog', 'archive_template' ) );
	    add_action( 'atiframebuilder_archive_template_1', array( 'Atiframebuilder_Blog', 'archive_template_1' ) );
	    add_action( 'atiframebuilder_archive_template_2', array( 'Atiframebuilder_Blog', 'archive_template_2' ) );
	    add_action( 'atiframebuilder_archive_template_3', array( 'Atiframebuilder_Blog', 'archive_template_3' ) );




        add_action( 'atiframebuilder_blog_number_of_columns', array( 'Atiframebuilder_Blog', 'number_of_columns' ) );
        add_action( 'atiframebuilder_blog_thumb', array( 'Atiframebuilder_Blog', 'thumb_size' ) );

	    add_action( 'atiframebuilder_blog_entry_meta_header', array( 'Atiframebuilder_Blog', 'entry_meta_header' ) );
	    add_action( 'atiframebuilder_blog_entry_meta', array( 'Atiframebuilder_Blog', 'entry_meta' ) );

	    add_action( 'atiframebuilder_blog_read_more', array( 'Atiframebuilder_Blog', 'read_more' ) );

	    add_action( 'atiframebuilder_blog_tags', array( 'Atiframebuilder_Blog', 'tags' ) );
	    

	    add_action( 'atiframebuilder_blog_post_nav', array( 'Atiframebuilder_Blog', 'post_nav' ) );
	    add_action( 'atiframebuilder_blog_post_author', array( 'Atiframebuilder_Blog', 'post_author' ) );

	    add_action( 'atiframebuilder_blog_show_postmore', array( 'Atiframebuilder_Blog', 'show_postmore' ) );
	    add_action( 'atiframebuilder_blog_show_postmore_2', array( 'Atiframebuilder_Blog', 'show_postmore2' ) );
	    add_action( 'atiframebuilder_blog_cat_list', array( 'Atiframebuilder_Blog', 'cat_list' ) );

        add_filter( 'comment_form_default_fields', array( $this, 'update_comments_fields' ) );
        add_filter( 'comment_form_defaults', array( $this, 'update_comment_field' ) );
	    add_action( 'atiframebuilder_get_post_content', array( 'Atiframebuilder_Blog', 'get_post_content' ) );
	    add_filter( 'atiframebuilder_get_tag', array( 'Atiframebuilder_Blog', 'get_tag' ) );
	    add_filter( 'atiframebuilder_author_links', array( $this, 'author_links' ) );
	    add_action( 'atiframebuilder_user_contactmethods', array( $this, 'author_links_fields' ), 10, 1 );
        add_filter( 'atiframebuilder_audio', array( $this, 'audio_output' ) );
        add_filter( 'atiframebuilder_audio_get', array( $this, 'audio_get' ) );
        add_filter( 'atiframebuilder_quote', array( $this, 'quote_output' ) );
		add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );

    }

    public static function single_template() {
        global $secretlab;
        if ( isset( $secretlab['single_template'] ) ) {

		    switch ( $secretlab['single_template'] ) {
			case '1':
				do_action( 'atiframebuilder_single_template_1' );
				break;
			case '2':
				do_action( 'atiframebuilder_single_template_2' );
				break;
			case '3':
				do_action( 'atiframebuilder_single_template_3' );
				break;
            }

        } else {
	        do_action( 'atiframebuilder_single_template_' . Atiframebuilder_Theme_Demo::DEFAULT_POST_THEMPLATE );
        }
    }

	public static function single_template_1() {
		echo '<div class="postbody">';
		do_action( 'atiframebuilder_header_single_post_heading' );
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			the_post_thumbnail( 'atiframebuilder_long' );
			echo '</div>';
		}
		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'stucy' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'stucy' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		do_action( 'atiframebuilder_blog_tags' );
		echo '</div>
        </div>';
		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author' );
		do_action( 'atiframebuilder_blog_post_nav' );
		do_action( 'atiframebuilder_blog_show_postmore' );
		comments_template();
		echo '</div>';
	}

	public static function single_template_2() {
		global $post;
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';
		$author ='<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a>';
		echo '<div class="postbody">';
		echo '<div class="meta">';
		echo '<div class="date"><label>'.esc_attr__( 'Date', 'stucy' ).'</label><span>'.get_the_date().'</span></div>';
		echo '<div class="author"><label>'.esc_attr__( 'Author', 'stucy' ).'</label><span>'.$author.'</span></div>';
		echo '<div class="cat"><label>'.esc_attr__( 'Category', 'stucy' ).'</label><span>'.get_the_category_list( '', 'single', $post->ID ).'</span></div>';
		echo '</div>';
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			the_post_thumbnail( 'atiframebuilder_long650' );
			echo '<div class="over">';
			if ( 'standard' == $format ) {

			} elseif ( 'video' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'audio' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'gallery' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'quote' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'link' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
			}
			echo '</div>';
			echo '</div>';
		}
		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'stucy' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'stucy' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		echo '<div class="clearfix"></div>';
		
		do_action( 'atiframebuilder_blog_tags' );
		echo '</div>
        </div>';

		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author' );
		do_action( 'atiframebuilder_blog_post_nav' );
		do_action( 'atiframebuilder_blog_show_postmore_2' );
		comments_template();
		echo '</div>';
	}

	public static function archive_template() {
		global $secretlab;
		if ( isset( $secretlab['archive_template'] ) ) {
			switch ( $secretlab['archive_template'] ) {
				case '1':
					do_action( 'atiframebuilder_archive_template_1' );
					break;
				case '2':
					do_action( 'atiframebuilder_archive_template_2' );
					break;
				case '3':
					do_action( 'atiframebuilder_archive_template_3' );
					break;
				case '4':
					do_action( 'atiframebuilder_archive_template_4' );
					break;
			}
		} else {
			do_action( 'atiframebuilder_archive_template_' . Atiframebuilder_Theme_Demo::DEFAULT_ARCHIVE_THEMPLATE );
		}
	}

	public static function archive_template_1() {
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="thumb">';
			do_action( 'atiframebuilder_blog_thumb' );
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '<div><a href="'.get_the_permalink().'" rel="bookmark"><img src="' . esc_url( get_template_directory_uri() ) . '/images/eye.svg" alt="'.esc_attr__( 'Full Post', 'stucy' ).'"></a></div></div>';
		}

        echo '<div class="c_block">
            <header class="entry-header">
                <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>
                <div class="entry-meta">';
					do_action( 'atiframebuilder_blog_entry_meta' );
		echo '</div>
            </header><!-- .entry-header -->
            <div class="entry-content">';
				the_excerpt();
				do_action( 'atiframebuilder_blog_read_more' );

		echo '</div>
        </div>';
	}

	public static function archive_template_2() {
		global $post;
		$authorimg ='<span class="post-author">'.get_avatar( get_the_author_meta( 'user_email' ), 40 ).'  <a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a></span>';
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';

		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="thumb">
                <a href="'.get_the_permalink().'" rel="bookmark"></a>';
			do_action( 'atiframebuilder_blog_thumb' );
			echo '<div class="over">';
			if ( 'standard' == $format ) {

            } elseif ( 'video' == $format ) {
                echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'audio' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'gallery' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'quote' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'link' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
			}
			echo '</div></div>';
		}

		echo '<div class="c_block">
            <header class="entry-header">';
		        do_action( 'atiframebuilder_blog_cat_list' );
		        echo '<h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
            echo '</header><!-- .entry-header -->
            <div class="entry-content">';
                echo wpautop( get_the_excerpt() );
                echo '<div class="entry-meta">'.$authorimg.'<span class="date">'.get_the_date().'</span></div>';
                do_action( 'atiframebuilder_blog_read_more' );
		echo '</div>
        </div>';


	}

	public static function archive_template_3() {


		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';
		if ( has_post_thumbnail() && ! is_attachment() && ('quote' != $format ) ) {
			echo '<div class="thumb">';
			echo get_the_post_thumbnail( '', 'atiframebuilder_long750' );
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '<div class="thhov"><a href="'.get_the_permalink().'" rel="bookmark">';
			if ( 'video' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/play2.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'audio' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/audio.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'gallery' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/gallery2.svg" alt="'.get_the_title().'"></span>';
			}
			echo '</a></div>';
			echo '</div>';
		}
		if ( 'quote' == $format ) {
			echo '<div class="thumb">';
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '</div>';
		}

		echo '<div class="c_block">
            <header class="entry-header">
                <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
            echo '</header><!-- .entry-header -->
            <div class="entry-content">';
            if ( 'quote' == $format ) {
	            $quote = Atiframebuilder_Blog::get_tag(  get_the_content() , '<blockquote', '</blockquote>' );
	            if ( ! empty( $quote ) ) {
		            echo '<a href="'.get_the_permalink().'" rel="bookmark">'.$quote.'</a>';
	            } else {
		            echo '<a href="'.get_the_permalink().'" rel="bookmark">'.wpautop( get_the_excerpt() ).'</a>';
	            }
            }else {
	            echo wpautop( get_the_excerpt() );
            }

            echo '<div class="entry-meta">';
            do_action( 'atiframebuilder_blog_entry_meta' );
            echo '</div>';
            do_action( 'atiframebuilder_blog_read_more' );

            echo '</div>';
            if( is_sticky() && !is_category() ){
                echo '<svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;">
<g>
	<g>
		<path d="M346.991,149.886l-21.508-21.509l-176.36,176.355c-21.903,21.903-21.903,57.543,0,79.447
			c21.903,21.904,57.543,21.904,79.447,0L465.422,147.32c16.3-16.3,25.277-37.971,25.277-61.022s-8.977-44.722-25.277-61.022
			C449.123,8.977,427.451,0,404.4,0c-23.052,0-44.723,8.977-61.022,25.277L55.401,313.254c-21.99,21.99-34.1,51.226-34.1,82.323
			c0,31.098,12.11,60.333,34.1,82.323c21.99,21.99,51.226,34.1,82.323,34.1s60.333-12.11,82.323-34.1l227.479-227.48l-21.508-21.508
			l-227.479,227.48c-16.245,16.245-37.842,25.19-60.815,25.19c-22.973,0-44.57-8.946-60.815-25.19
			c-16.245-16.245-25.19-37.842-25.19-60.815c0-22.973,8.947-44.571,25.19-60.815L364.887,46.785
			c21.788-21.787,57.24-21.787,79.028,0c21.788,21.788,21.788,57.24,0,79.028L207.063,362.67c-10.044,10.044-26.387,10.044-36.431,0
			s-10.044-26.387,0-36.431L346.991,149.886z"/>
	</g>
</g>
</svg>';
            }
        echo '</div>';
	}

    public static function show_postmore() {
        global $secretlab;
        if ( isset( $secretlab['is_related_posts'] ) ) {
            if ( '1' === $secretlab['is_related_posts'] ) {
                self::postmore_query();
            }
        } else {
	        self::postmore_query();
        }
    }

	public static function show_postmore2() {
		global $secretlab;
		
		if ( isset( $secretlab['is_related_posts'] ) ) {
			
			if ( true === $secretlab['is_related_posts'] ) {
				self::postmore_query2();
			}
		} else {
			self::postmore_query2();
		}
	}

	public static function post_author() {
		global $post, $secretlab;
		$user_description = get_the_author_meta( 'description' );
		if (!empty($user_description)) {
			if ( isset( $secretlab['show_post_author'] ) ) {
				if ( '1' === $secretlab['show_post_author'] ) {
					echo '<div class="author_info author vcard" itemscope="" itemtype="https://schema.org/Person">

                    <div class="author_avatar" itemprop="image">' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . '</div>
                
                    <div class="author_description">
                        <h5 class="author_title" itemprop="name">' . get_the_author() . '</h5>
                
                        <div class="author_bio" itemprop="description">
                            <p>' . $user_description . '</p>
                            <a class="author_link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html__( 'View all posts by', 'stucy' ) . ' <span class="author_name">' . get_the_author() . '</span></a>
                            <div class="entry-meta author_links">';
					do_action( 'atiframebuilder_author_links' );
					echo '</div></div>
                    </div>
                </div>';
				}
			} else {
				echo '<div class="author_info author vcard" itemscope="" itemtype="https://schema.org/Person">

                    <div class="author_avatar" itemprop="image">' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . '</div>
                
                    <div class="author_description">
                        <h5 class="author_title" itemprop="name">' . get_the_author() . '</h5>
                
                        <div class="author_bio" itemprop="description">
                            <p>' . $user_description . '</p>
                            <a class="author_link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html__( 'View all posts by', 'stucy' ) . ' <span class="author_name">' . get_the_author() . '</span></a>
                            <div class="entry-meta author_links">';
				do_action( 'atiframebuilder_author_links' );
				echo '</div></div>
                    </div>
                </div>';
			}
		}
	}

	public static function cat_list() {
		global $post, $secretlab;
		// Categories: used between list items, there is a space after the comma.
		if ( isset( $secretlab['show_post_category'] ) ) {
			if ( '0' != $secretlab['show_post_category'] ) {
				echo get_the_category_list( '', 'multiple', $post->ID );
			}
		} else {
			echo get_the_category_list( '', 'multiple', $post->ID );
		}
	}

    public static function postmore_query() {
        global $post, $secretlab;
	    $rmore = '';
	    if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
	    $backup = $post;
        $tags   = wp_get_post_tags( $post->ID );
        if ( $tags ) {
            $tag_ids = array();
            foreach ( $tags as $individual_tag ) {
                $tag_ids[] = $individual_tag->term_id;
            }

            $args     = array(
                'tag__in'      => $tag_ids,
                'post__not_in' => array( $post->ID ),
                'showposts'    =>3, // Number of related posts that will be shown.
            );
            $my_query = new WP_Query( $args );
            if( $my_query->have_posts() ) {
                echo '<div class="related">';
                if ( !empty( $secretlab['related_posts_title'] ) ) {
	                echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
                }

                while ( $my_query->have_posts() ) {
                    $my_query->the_post();
	                echo '<div class="rblock">
                        <div class="thumb">';
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                    the_post_thumbnail( 'atiframebuilder_rectangle' );
                                }
                                if ( '1' === $secretlab['show_post_category'] ) {
                                    echo get_the_category_list( '', 'single', $post->ID );
                                }
                            echo '<div><a href="'.get_the_permalink().'" rel="bookmark"><img src="' . esc_url( get_template_directory_uri() ) . '/images/eye.svg" alt="'.esc_attr__( 'Full Post', 'stucy' ).'"></a></div>
                        </div>
                        <div class="wr"><h5><a href="' , get_the_permalink() , '" title="' , get_the_title() , '">' , get_the_title() , '</a></h5>
<div class="descr">'.get_the_excerpt().'</div>
                        <div class="entry-meta"><span class="date"><i></i> ' , get_the_date() , '</span></div>';

				    echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';

	                echo '
                        </div>
                    </div>';
                }
                echo '</div>';
            }
        }
        $post = $backup;
        wp_reset_postdata();
    }
	public static function postmore_query2() {
		global $post, $secretlab;
		$rmore = '';
		$authorimg ='<span class="post-author">'.get_avatar( get_the_author_meta( 'user_email' ), 40 ).'  <a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a></span>';
		if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
		$backup = $post;
		$tags   = wp_get_post_tags( $post->ID );
		if ( $tags ) {
			$tag_ids = array();
			foreach ( $tags as $individual_tag ) {
				$tag_ids[] = $individual_tag->term_id;
			}

			$args     = array(
				'tag__in'      => $tag_ids,
				'post__not_in' => array( $post->ID ),
				'showposts'    =>2, // Number of related posts that will be shown.
			);
			$my_query = new WP_Query( $args );
			if( $my_query->have_posts() ) {
				echo '<div class="related layout2">';
				if ( !empty( $secretlab['related_posts_title'] ) ) {
					echo '<div class="may"><span>'.esc_attr__( 'May also like', 'stucy' ).'</span></div>';
					echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
				}

				while ( $my_query->have_posts() ) {
					$my_query->the_post();
					$format = get_post_format();
					if ( false === $format )
						$format = 'standard';
					echo '<div class="rblock';
					if ( !has_post_thumbnail() ) {echo ' noth';}
					echo '" >';
                        if ( has_post_thumbnail() ) {
						echo '<div class="thumb"><a href="'.get_the_permalink().'" rel="bookmark"></a>';
					
						the_post_thumbnail( 'atiframebuilder_rectangle_450' );

						echo '<div class="over">';
						if ( 'standard' == $format ) {

						} elseif ( 'video' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'audio' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'gallery' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'quote' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'link' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
						}
						echo '</div>';
					echo '</div>';
					}

                        echo '<div class="wr">';
					        echo get_the_category_list( '', 'single', $post->ID );
		                    echo '<h5 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h5>';
                            echo '<div class="entry-content">';
                            echo wpautop( get_the_excerpt() );
                            echo '<div class="entry-meta">'.$authorimg.'<span class="date">'.get_the_date().'</span></div>';
					        echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';
					        echo '</div>
                        </div>
                    </div>';
				}
				echo '</div>';
			}
		}
		$post = $backup;
		wp_reset_postdata();
	}

    // Read more link for post feed
    public static function read_more() {
        global $post, $secretlab;

	    if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
		    $sl_s_r = isset( $secretlab['show_read_more'] ) ? $secretlab['show_read_more'] : '1';
		    if ( '1' === $sl_s_r ) {
			    if ( ! empty( $secretlab['read_more_text'] ) ) {
				    echo '<a href="', get_the_permalink( $post ), '" rel="bookmark" class="more">', esc_html( $secretlab['read_more_text'] ), '</a>';
			    }
		    }
	    } else {
		    echo '<a href="' , get_the_permalink( $post ) , '" rel="bookmark" class="more">' , esc_html__( 'Read more', 'stucy' ) , '</a>';
	    }
    }

    /**
     * Print HTML with meta information for current post: categories, comments counter, author, and date.
     *
     * Create your own entry_meta() to override in a child theme.
     *
    */
    public static function entry_meta_header() {
        global $secretlab;

        // Post author
        if ( isset( $secretlab['show_post_author'] ) ) {
            if ( '0' !=$secretlab['show_post_author'] ) {
                if ( 'post' === get_post_type() ) {
	                $post_id = get_queried_object_id();
	                $post_author_id = get_post_field( 'post_author', $post_id );
	                $anick = get_the_author_meta('nickname', $post_author_id);

	                $author_url = get_author_posts_url( $post_author_id, $anick );
	                echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( $author_url ).'" title="'.esc_attr__('View all posts by', 'stucy').' '.$anick.'" rel="author">'.$anick.'</a></span>';
                }
            }
        } else {
	        if ( 'post' === get_post_type() ) {
		        $post_id = get_queried_object_id();
		        $post_author_id = get_post_field( 'post_author', $post_id );
		        $anick = get_the_author_meta('nickname', $post_author_id);

		        $author_url = get_author_posts_url( $post_author_id, $anick );
		        echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( $author_url ).'" title="'.esc_attr__('View all posts by', 'stucy').' '.$anick.'" rel="author">'.$anick.'</a></span>';
	        }
        }

        //Post data
	    echo '<span class="updated"> ', get_the_modified_time( 'F jS, Y h:i a' ) , '</span>';
        if ( isset( $secretlab['show_post_date'] ) ) {
            if ( '0' !=$secretlab['show_post_date'] ) {
                echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
            }
        } else {
            echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
        }




        // Comments counter
        if ( isset( $secretlab['show_comments_count'] ) ) {
            if ( '0' !=$secretlab['show_comments_count'] ) {
                if ( comments_open( get_the_ID() ) ) {
                    echo '<span class="comments-link"><i></i> ';
                    comments_popup_link( esc_attr__( 'Add a comment', 'stucy' ), esc_attr__( '1 Comment', 'stucy' ), esc_html__( '% Comments', 'stucy' ) );
                    echo '</span>';
                }
            }
        } else {
            echo '<span class="comments-link"><i></i> ';
            comments_popup_link( esc_attr__( 'Add a comment', 'stucy' ), esc_attr__( '1 Comment', 'stucy' ), esc_html__( '% Comments', 'stucy' ) );
            echo '</span>';
        }
    }
    public static function entry_meta() {
        global $secretlab, $post;

        // Post author
        if ( isset( $secretlab['show_post_author'] ) ) {
            if ( '0' !=$secretlab['show_post_author'] ) {
                if ( 'post' === get_post_type() ) {

                    echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'stucy').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
                }
            }
        } else {
	        echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'stucy').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
        }

        //Post data
	    echo '<span class="updated"> ', get_the_modified_time( 'F jS, Y h:i a' ) , '</span>';
        if ( isset( $secretlab['show_post_date'] ) ) {
            if ( '0' !=$secretlab['show_post_date'] ) {
                echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
            }
        } else {
            echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
        }




        // Comments counter
        if ( isset( $secretlab['show_comments_count'] ) ) {
            if ( '0' !=$secretlab['show_comments_count'] ) {
                if ( comments_open( get_the_ID() ) ) {
                    echo '<span class="comments-link"><i></i> ';
                    comments_popup_link( esc_attr__( 'Add a comment', 'stucy' ), esc_attr__( '1 Comment', 'stucy' ), esc_html__( '% Comments', 'stucy' ) );
                    echo '</span>';
                }
            }
        } else {
            echo '<span class="comments-link"><i></i> ';
            comments_popup_link( esc_attr__( 'Add a comment', 'stucy' ), esc_attr__( '1 Comment', 'stucy' ), esc_html__( '% Comments', 'stucy' ) );
            echo '</span>';
        }
    }

    /**
     * Display navigation to next/previous post when applicable.
     *
    */
    public static function post_nav() {
        global $post;
	    $prev_post = get_previous_post();
	    $next_post = get_next_post();
	    $author ='<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a>';
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );
	    if ( !$next && !$previous )
		    return;


	    echo '<nav class="nav-links clearfix">';
        if( ! empty($prev_post) ) {
	        ?>

            <div class="nav-previous">
		        <?php
		        echo '<span><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M458.672,202.653H207.088l77.781-77.781c21.803-21.803,21.803-57.28,0-79.083s-57.28-21.803-79.083,0L3.12,248.456
			c-4.16,4.16-4.16,10.923,0,15.083l202.667,202.667c10.901,10.901,25.216,16.363,39.552,16.363s28.629-5.44,39.552-16.363
			c21.803-21.803,21.803-57.28,0-79.083l-77.803-77.803h251.584c29.397,0,53.333-23.936,53.333-53.333
			S488.069,202.653,458.672,202.653z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Previous Post', 'stucy' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '">' . esc_html( get_the_title( $prev_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $prev_post->ID ) . '</span></div>';
		        ?>
            </div>
	        <?php
        }
		echo '<a href="'.get_post_type_archive_link( 'post' ).'"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="20px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
		<g>
			<g>
				<rect width="16" height="16"/>
				<rect x="19" width="16" height="16"/>
				<rect y="19" width="16" height="16"/>
				<rect x="19" y="19" width="16" height="16"/>
			</g>
		</g>
		</svg></a>';
        if( ! empty($next_post) ) {
	        ?>
            <div class="nav-next">
		        <?php
		        echo '<span><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M458.672,202.653H207.088l77.781-77.781c21.803-21.803,21.803-57.28,0-79.083s-57.28-21.803-79.083,0L3.12,248.456
			c-4.16,4.16-4.16,10.923,0,15.083l202.667,202.667c10.901,10.901,25.216,16.363,39.552,16.363s28.629-5.44,39.552-16.363
			c21.803-21.803,21.803-57.28,0-79.083l-77.803-77.803h251.584c29.397,0,53.333-23.936,53.333-53.333
			S488.069,202.653,458.672,202.653z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Next Post', 'stucy' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '">' . esc_html( get_the_title( $next_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $next_post->ID ) . '</span></div>';
		        ?>
            </div>

	        <?php
        }
        echo '</nav>';
    }

    /* Prev & Next Post Narrow Icons */
    /**
     * Display navigation to next/previous post when applicable.
     *
     */
    public function post_navicon() {
        global $post;

        // Don't print empty markup if there's nowhere to navigate.
        $iprevious = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $inext = get_adjacent_post( false, '', false );

        if ( !$inext && !$iprevious )
            return;
        ?>
        <div class="post-navigation-icon">
            <?php next_post_link( '%link', '<span class="icon-arrow-left22"></span>', true ); ?>
            <?php previous_post_link( '%link', '<span class="icon-arrow-right22"></span>', true ); ?>
        </div>
        <?php
    }

    // Display of CSS class, for column option of tag, category, archive and index page
    public static function number_of_columns() {
        global $secretlab;
	    if ( ! is_single() && !is_page() ) {
		    $cols = ' column' . Atiframebuilder_Theme_Demo::DEFAULT_COLUMN;
		    $colsset = Atiframebuilder_Theme_Demo::DEFAULT_COLUMN;
		    if (isset($secretlab['blog-columns'])) {
			    $colsset = $secretlab['blog-columns'];
		    }
		    if ( is_category()) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_tag() ) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_archive() ) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_home() ) {
			    $cols = ' column' . $colsset;
		    }

		    echo ' ' . $cols;

		    if ( isset( $secretlab['blog-sidebar-layout'] ) ) {
			    $sl_blog_sidebars = $secretlab['blog-sidebar-layout'];
			    if ( '3' === $sl_blog_sidebars || '4' === $sl_blog_sidebars ) {
				    echo ' sb';
			    } elseif ( '2' === $sl_blog_sidebars ) {
				    echo ' sbs';
			    }
		    }
	    }


	    if (isset($secretlab['archive_template'])) {
            if ( !is_page() && !is_single())  {
                echo ' alayout' . $secretlab['archive_template'];
            }
	    } else {echo ' alayout' . Atiframebuilder_Theme_Demo::DEFAULT_ARCHIVE_THEMPLATE;}

		    if ( isset( $secretlab['single_template'] ) ) {
                if ( is_single()) {
                    echo ' slayout' . $secretlab['single_template'];
                }
		    } else {
			    echo ' slayout' . Atiframebuilder_Theme_Demo::DEFAULT_POST_THEMPLATE;
		    }
    }

	// Select Thumb Size depends on post caategory wide
	public static function thumb_size() {
		global $secretlab;
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			$sl_blog_sidebars = $secretlab['blog-sidebar-layout'];
			if ( ! is_single() ) {
				if (  '2' === $sl_blog_sidebars || '1' === $sl_blog_sidebars ) {
					echo get_the_post_thumbnail( '', 'atiframebuilder_rectangle' );
				} elseif ( '3' === $sl_blog_sidebars || '4' === $sl_blog_sidebars) {
					echo get_the_post_thumbnail( '', 'atiframebuilder_rectangle_big' );
				}
			}
		} else {
			echo get_the_post_thumbnail();
        }
	}

    // Tags for blog post
    public static function tags() {
        global $secretlab;

        //tags
        if ( isset( $secretlab['show_post_tags'] ) ) {
            if ( '1' === $secretlab['show_post_tags'] ) {
                $tag_list = get_the_tag_list( '', ' ' );
                if ( $tag_list ) {
                    echo '<span class="tags-links"><b>' , esc_attr__( 'Tags', 'stucy' ) , ':</b> ' , $tag_list , '</span>';
                }
            }
        } else {
            $tag_list = get_the_tag_list( '', ' ' );
            if ( $tag_list ) {
                echo '<span class="tags-links"><b>' , esc_attr__('Tags', 'stucy' ) , ':</b> ' , $tag_list , '</span>';
            }
        }

    }
	

    // Comment layout
	public static function comment( $comment, $args, $depth ) {
        switch ( $comment->comment_type ) {
            case 'pingback':
            ?>
            <li class="trackback comment-content"><p><?php esc_html_e( 'Trackback:', 'stucy' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'stucy' ), '<span class="edit-link">', '<span>' ); ?></p>
                <?php
                break;
                case 'trackback':
                ?>
            <li class="pingback comment-content"><p><?php esc_html_e( 'Pingback:', 'stucy' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'stucy' ), '<span class="edit-link">', '<span>' ); ?></p>
                <?php
                break;
                default:
	                $c = $GLOBALS['comment'];
	                $GLOBALS['comment'] = $comment;
	                echo '<li ';
	                comment_class();
	                echo ' ' , 'id="li-comment-';
	                comment_ID();
	                echo '">';
	                echo '<div id="comment-';
	                comment_ID();
	                echo '">';
	                echo '<div class="comment-author vcard">' , get_avatar( $comment, $args['avatar_size'] ) , '</div>';
	                if ( '0' === $comment->comment_approved ) {
		                echo '<em>' , esc_attr__( 'Your comment is awaiting moderation.', 'stucy' ) , '</em><br />';
	                }
	                echo '<footer class="comment-meta">';
	                echo '<div class="comment-metadata">';
	                echo '<span class="fn"> '.get_comment_author_link().'</span> <span class="date"><i></i> <a href="'.get_comment_link().'">'.get_comment_date().' '.esc_attr__( 'at', 'stucy' ).' '.get_comment_time().'</a></span> ';
	                echo '<span class="reply">';
	                comment_reply_link(array_merge( $args, array( 'reply_text' => ''.esc_html__("Reply", 'stucy'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
	                echo '</span>';
	                edit_post_link( esc_html__( 'Edit', 'stucy' ), '<span class="edit-link"><i></i> ', '</span>' );

	                echo '</div>
        </footer>';
	                echo '<div class="comment-content">';
	                comment_text();

	                echo '</div>';
	                echo '
    </div>';
	                $GLOBALS['comment'] = $c;
	                break;
        }

    }

    // Comment form fields update: add placeholders
    public function update_comments_fields( $fields ) {

        $commenter = wp_get_current_commenter();
        $req       = get_option( 'require_name_email' );
        $label     = $req ? '*' : ' ' . esc_attr__( '(optional)', 'stucy' );
        $aria_req  = $req ? "aria-required='true'" : '';

        $fields['author'] =
            '<p class="comment-form-author">
                <label for="author">' . esc_attr__( "Name", 'stucy' ) . $label . '</label>
                <input id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", 'stucy' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30" ' . $aria_req . ' />
            </p>';

        $fields['email'] =
            '<p class="comment-form-email">
                <label for="email">' . esc_attr__( "Email", 'stucy' ) . $label . '</label>
                <input id="email" name="email" type="email" placeholder="' . esc_attr__( "Your E-mail", 'stucy' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
            '" size="30" ' . $aria_req . ' />
            </p>';

        $fields['url'] =
            '<p class="comment-form-url">
                <label for="url">' . esc_attr__( "Website", 'stucy' ) . '</label>
                <input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Your Website", 'stucy' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" size="30" />
                </p>';

        return $fields;
    }

    public function update_comment_field( $fields ) {

        $fields['comment_field'] = str_replace(
            '<textarea',
            '<textarea placeholder="' . esc_attr__( 'Enter comment here...', 'stucy' ) . '"',
            $fields['comment_field']
        );


        return $fields;
    }

    public static function get_post_content( $apply_filters = false ) {
		global $post;
		$content = ! empty( $post->post_content ) ? $post->post_content : '';
		return $apply_filters ? apply_filters( 'the_content', $content ) : $content;
	}

	public static function get_tag( $text, $tag_start, $tag_end = '' ) {
		$val       = '';
		$pos_start = strpos( $text, $tag_start );
		if ( false !== $pos_start ) {
			$pos_end = $tag_end ? strpos( $text, $tag_end, $pos_start ) : false;
			if ( false === $pos_end ) {
				$tag_end = substr( $tag_start, 0, 1 ) == '<' ? '>' : ']';
				$pos_end = strpos( $text, $tag_end, $pos_start );
			}
			$val = substr( $text, $pos_start, $pos_end + strlen( $tag_end ) - $pos_start );
		}
		return $val;
	}
    // Author links
	public static function author_links() {

		if(get_the_author_meta('facebook')) : ?><a target="_blank" class="author-social" href="https://facebook.com/<?php echo the_author_meta('facebook'); ?>">Facebook</a><?php endif;
        if(get_the_author_meta('twitter')) : ?><a target="_blank" class="author-social" href="https://twitter.com/<?php echo the_author_meta('twitter'); ?>">Twitter</a><?php endif;
        if(get_the_author_meta('instagram')) : ?><a target="_blank" class="author-social" href="https://instagram.com/<?php echo the_author_meta('instagram'); ?>">Instagram</a><?php endif;
        if(get_the_author_meta('pinterest')) : ?><a target="_blank" class="author-social" href="https://pinterest.com/<?php echo the_author_meta('pinterest'); ?>">Pinterest</a><?php endif;
        if(get_the_author_meta('tumblr')) : ?><a target="_blank" class="author-social" href="https://<?php echo the_author_meta('tumblr'); ?>.tumblr.com/">Tumblr</a><?php endif;
	}

	public function author_links_fields($contactmethods) {
		$contactmethods['twitter']   = esc_html__('Twitter Username', 'stucy');
		$contactmethods['facebook']  = esc_html__('Facebook Username', 'stucy');
		$contactmethods['tumblr']    = esc_html__('Tumblr Username', 'stucy');
		$contactmethods['instagram'] = esc_html__('Instagram Username', 'stucy');
		$contactmethods['pinterest'] = esc_html__('Pinterest Username', 'stucy');

		return $contactmethods;
	}

    public function new_excerpt_more($more) {
	    return '...';
    }

}

?>
