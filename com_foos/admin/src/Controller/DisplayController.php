<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Administrator\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

/**
 * Foos master display controller.
 *
 * @since  1.0.0
 */
class DisplayController extends BaseController
{
	/**
	 * The default view.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $default_view = 'foos';

	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   array    $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link \JFilterInput::clean()}.
	 *
	 * @return  BaseController|bool  This object to support chaining.
	 *
	 * @since   1.0.0
	 *
	 * @throws  \Exception
	 */
	public function display($cachable = false, $urlparams = [])
	{
		return parent::display();
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
    public function setViewModels(Object $view)
    {
        parent::setViewModels($view);

        $viewName = $view->getName();

        // Push the Second model into the Foos view 
        if ($viewName == strtolower("Foos") && ($model = $this->getModel('Second')) ){
            $view->setModel($model);
        }

        // Push the Third model into the Foos view 
        if ($viewName == strtolower("Foos") && ($model = $this->getModel('Third')) ){
            $view->setModel($model);
        }
    }
}