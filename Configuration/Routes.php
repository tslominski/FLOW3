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
	->setUriPattern('')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'index',
		)
	);

$c->comment
	->setUriPattern('comments/[@action]')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Comments',
			'@action' => 'show',
		)
	);

$c->post
	->setUriPattern('posts/[postUUID].html')
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
	->setUriPattern('posts.html?tag=[tag]')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'postsByTag',
		)
	);

$c->posts
	->setUriPattern('posts.html')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Posts',
			'@action' => 'index',
		)
	);


$c->postsSetup
	->setUriPattern('setup')
	->setDefaults(
		array(
			'@package' => 'Blog',
			'@controller' => 'Setup',
			'@action' => 'index',
		)
	);
?>
