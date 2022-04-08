<?php

namespace JoshMoreno\Html;

use Laravel\Nova\Fields\Field;
use Illuminate\Support\Str;

class Html extends Field
{
    public $component = 'nova-html-field';

    public function __construct($name)
    {
        parent::__construct($name, null, null);

        $this->attribute = Str::random(16);
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
