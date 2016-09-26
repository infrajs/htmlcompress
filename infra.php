<?php
use infrajs\event\Event;
use infrajs\view\View;
use infrajs\access\Access;
use WyriHaximus\HtmlCompress;

Event::one('Controller.onshow', function () {

	if (Access::debug()) return;
	$html = View::html();

	$parser = HtmlCompress\Factory::construct();
	$html=$parser->compress($html);

	View::html($html, true);
});
