<?php

namespace JoshMoreno\Html;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportDependantFields;

class Html extends Field
{
    use SupportDependantFields;
    
    public $component = 'html';

    public function __construct($name)
    {
        parent::__construct($name, null, null);

        $this->attribute = 'HtmlComputedField';
    }

    /**
     * @param string|int|callable $html
     *
     * @return Html
     */
    public function html($html)
    {
        if ($html instanceof \Closure || (is_callable($html) && is_object($html))) {
            $html = $html();
        }

        return $this->withMeta([
            'html' => $html,
        ]);
    }

    /**
     * @param string $view
     *
     * @return array|string
     * @throws \Throwable
     */
    public function view(string $view)
    {
        return $this->html(view($view)->render());
    }
}
