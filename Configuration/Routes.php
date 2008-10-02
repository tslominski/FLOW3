<?php
declare(ENCODING="utf-8");

/*                                                                        *
 * Routes configuration                                                   *
 *                                                                        *
 * This file contains the configuration for the MVC router.               *
 * Just add your own modifications as necessary.                          *
 *                                                                        *
 * Please refer to the FLOW3 manual for possible configuration options.   *
 *                                                                        */
$c->home
	->setUrlPattern('')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'index',
		)
	);

$c->comment
	->setUrlPattern('comments/[@action]')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Comments',
			'@action' => 'show',
		)
	);

$c->post
	->setUrlPattern('posts/[postUUID].html')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'show',
		)
	)
	->setRoutePartHandlers(
		array(
			'postUUID' => 'F3::Blog::RoutePartHandlers::PostRoutePartHandler',
		)
	);

$c->postsByTag
	->setUrlPattern('posts.html?tag=[tag]')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'postsByTag',
		)
	);

$c->posts
	->setUrlPattern('posts.html')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'index',
		)
	);
	

$c->postsSetup
	->setUrlPattern('setup')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Setup',
			'@action' => 'index',
		)
	);
?>
