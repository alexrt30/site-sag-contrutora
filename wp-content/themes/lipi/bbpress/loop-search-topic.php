<?php

/**
 * Search Loop - Single Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div class="bbp-topic-header">

	<div class="bbp-topic-title">

		<?php do_action( 'bbp_theme_before_topic_title' ); ?>

		<h3><?php _e( 'Topic: ', 'lipi' ); ?>
		<a href="<?php bbp_topic_permalink(); ?>"><?php bbp_topic_title(); ?></a></h3>

		<div class="bbp-topic-title-meta">

			<?php if ( function_exists( 'bbp_is_forum_group_forum' ) && bbp_is_forum_group_forum( bbp_get_topic_forum_id() ) ) : ?>

				<?php _e( 'in group forum ', 'lipi' ); ?>

			<?php else : ?>

				<?php _e( 'in forum ', 'lipi' ); ?>

			<?php endif; ?>

			<a href="<?php bbp_forum_permalink( bbp_get_topic_forum_id() ); ?>"><?php bbp_forum_title( bbp_get_topic_forum_id() ); ?></a>

		</div><!-- .bbp-topic-title-meta -->

		<?php do_action( 'bbp_theme_after_topic_title' ); ?>

	</div><!-- .bbp-topic-title -->

</div><!-- .bbp-topic-header -->

<div id="post-<?php bbp_topic_id(); ?>" <?php bbp_topic_class(); ?>>

	<div class="bbp-topic-author clearfix">

	<span class="bbp-reply-post-date"><a href="<?php bbp_topic_permalink(); ?>" class="bbp-reply-permalink"><i class="fa fa-link"></i></a> <?php bbp_topic_post_date( bbp_get_topic_id() ); ?></span>

		<?php do_action( 'bbp_theme_before_topic_author_details' ); ?>

		<?php bbp_topic_author_link( array( 'sep' => '', 'show_role' => true, 'size' => 60 ) ); ?>

		<?php if ( bbp_is_user_keymaster() ) : ?>

			<?php do_action( 'bbp_theme_before_topic_author_admin_details' ); ?>

			<div class="bbp-reply-ip"><?php bbp_author_ip( bbp_get_topic_id() ); ?></div>

			<?php do_action( 'bbp_theme_after_topic_author_admin_details' ); ?>

		<?php endif; ?>

		<?php do_action( 'bbp_theme_after_topic_author_details' ); ?>

	</div><!-- .bbp-topic-author -->

	<div class="bbp-topic-content">

		<?php do_action( 'bbp_theme_before_topic_content' ); ?>

		<?php bbp_topic_content(); ?>

		<?php do_action( 'bbp_theme_after_topic_content' ); ?>

	</div><!-- .bbp-topic-content -->

</div><!-- #post-<?php bbp_topic_id(); ?> -->
