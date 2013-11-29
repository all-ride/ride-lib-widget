<?php

namespace pallo\library\widget;

use pallo\library\mvc\controller\Controller;

/**
 * Interface for a widget: a small independant component of a page
 */
interface Widget extends Controller {

    /**
     * Gets the machine name of the widget
     * @return string
     */
    public function getName();

    /**
     * Gets the path to the icon of the widget
     * @return string
     */
    public function getIcon();

    /**
     * Sets the instance identifier of the widget
     * @param string $identifier Instance identifier
     * @return null
     */
    public function setIdentifier($identifier);

    /**
     * Sets the code of the locale for the widget request
     * @param string $locale Code of the locale
     * @return null
     */
    public function setLocale($locale);

    /**
     * Gets the callback for the widget action
     * @return callback Callback for the action
     */
    public function getCallback();

    /**
     * Sets the properties of the widget
     * @param WidgetProperties $properties Widget properties
     * @return null
     */
    public function setProperties(WidgetProperties $properties);

    /**
     * Gets the callback for the properties action
     * @return null|callback Null if the widget does not implement a properties
     * action, a callback for the action otherwise
     */
    public function getPropertiesCallback();

}