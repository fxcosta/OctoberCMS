<?php namespace RainLab\Translate\FormWidgets;

use Backend\Classes\FormWidgetBase;
use RainLab\Translate\Models\Locale;

/**
 * ML Text
 * Renders a multi-lingual text field.
 *
 * @package rainlab\translate
 * @author Alexey Bobkov, Samuel Georges
 */
class MLText extends FormWidgetBase
{

    use \RainLab\Translate\Traits\MLControl;

    /**
     * {@inheritDoc}
     */
    public $defaultAlias = 'mltext';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->initLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->isAvailable = Locale::isAvailable();

        $this->prepareLocaleVars();

        if ($this->isAvailable)
            return $this->makePartial('mltext');
        else
            return $this->renderFallbackField();
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->loadLocaleAssets();
    }

}