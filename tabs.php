<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class TabsPlugin
 * @package Grav\Plugin
 */
class TabsPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
	    'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
        ];
    }

    /**
     * Add this plugin's templates directory to the twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

}
