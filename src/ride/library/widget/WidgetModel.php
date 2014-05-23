<?php

namespace ride\library\widget;

/**
 * Interface for the model of the available widgets
 */
interface WidgetModel {

    /**
     * Gets the instance of a widget
     * @param string $widget Machine name of the widget
     * @return \ride\library\widget\Widget
     */
    public function getWidget($widget);

    /**
     * Gets the available widgets
     * @return array Array with the machine name of the widget as key and an
     * instance of Widget as value
     */
    public function getWidgets();

}