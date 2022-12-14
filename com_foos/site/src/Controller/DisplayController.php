<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Site\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;

/**
 * Foos Component Controller
 *
 * @since  __BUMP_VERSION__
 */
class DisplayController extends BaseController
{
    /**
     * Constructor.
     *
     * @param   array                $config   An optional associative array of configuration settings.
     * Recognized key values include 'name', 'default_task', 'model_path', and
     * 'view_path' (this list is not meant to be comprehensive).
     * @param   MVCFactoryInterface  $factory  The factory.
     * @param   CMSApplication       $app      The JApplication for the dispatcher
     * @param   \JInput              $input    Input
     *
     * @since   __BUMP_VERSION__
     */
    public function __construct($config = array(), MVCFactoryInterface $factory = null, $app = null, $input = null)
    {
        parent::__construct($config, $factory, $app, $input);
    }

    /**
     * Method to display a view.
     *
     * @param   boolean  $cachable   If true, the view output will be cached
     * @param   array    $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link \JFilterInput::clean()}.
     *
     * @return  static  This object to support chaining.
     *
     * @since   __BUMP_VERSION__
     */
    public function display($cachable = false, $urlparams = array())
    {
        parent::display($cachable);

        return $this;
    }

    /**
     * Method to set the View Models
     *
     * Enable multiple models for views.
     *
     * @param   Object  $view  The view Object
     *
     * @return  void
     *
     */
    protected function prepareViewModel($view)
    {
        parent::prepareViewModel($view);

        $viewName = $view->getName();

        // Push the Second model into the Foos view
        if ($viewName == strtolower("Foo") && ($model = $this->getModel('SecondSite'))) {
            $view->setModel($model);
        }

        // Push the Third model into the Foos view
        if ($viewName == strtolower("Foo") && ($model = $this->getModel('Third', 'Administrator'))) {
            $view->setModel($model);
        }
    }
}
