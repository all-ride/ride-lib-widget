<?php

namespace ride\library\widget;

/**
 * Generic implementation of widget properties
 */
class GenericWidgetProperties implements WidgetProperties {

    /**
     * Id of the widget
     * @var integer
     */
    private $id;

	/**
	 * Data container for the properties
	 * @var array
	 */
	private $properties;

	/**
     * Construct this properties container
     * @param integer $widgetId Id of the widget instance
     * @return null
	 */
	public function __construct($widgetId) {
	    $this->id = $widgetId;
	    $this->properties = array();
	}

	/**
	 * Get the id of the widget instance
	 * @return integer
	 */
	public function getWidgetId() {
	    return $this->id;
	}

	/**
	 * Sets a property for the widget
	 * @param string $key Key of the property relative to widget.[widgetId].
	 * @param mixed $value Value for the property
	 * @return null
	 */
	public function setWidgetProperty($key, $value = null) {
	    if ($value === null) {
	        if (isset($this->properties[$key])) {
	            unset($this->properties[$key]);
            }
        } else {
            $this->properties[$key] = $value;
        }
	}

	/**
	 * Get a setting value for the widget
	 * @param string $key key of the setting
	 * @param mixed $default default value for when the setting is not set
	 * @return mixed setting value of $default if the setting was not set
	 */
	public function getWidgetProperty($key, $default = null) {
	    if (!isset($this->properties[$key])) {
	        return $default;
        }

        return $this->properties[$key];
	}

    /**
     * Gets all the properties of the widget
     * @param string $prefix Prefix of the properties to obtain
     * @return array Array with the properties of the widget
     */
    public function getWidgetProperties($prefix = null) {
        $result = array();

        foreach ($this->properties as $key => $value) {
            if ($prefix === null || strpos($key, $prefix) === 0) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * Clears all the properties of the widget
     * @param string $prefix Prefix of the properties to remove
     * @return null
     */
    public function clearWidgetProperties($prefix = null) {
        foreach ($this->properties as $key => $value) {
            if ($prefix === null || strpos($key, $prefix) === 0) {
                unset($this->properties[$key]);
            }
        }
	}

}
