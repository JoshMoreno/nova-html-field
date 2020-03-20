# ![Laravel Nova Html Field](https://github.com/joshmoreno/nova-html-field/raw/master/example.png)

A nova field for rendering html on all resource pages: index, detail, and forms. This is hopefully a temporary solution until nova supports computed fields on forms.

##Install
```
composer require joshmoreno/nova-html-field
```

## Usage
```php
// via a string of html
\JoshMoreno\Html\Html::make('Some Title')
    ->view('<h1>Example</h1>'),

// via a closure
\JoshMoreno\Html\Html::make('Some Title')
    ->html(function() {
        return "<h1>$this->name</h1>";
    }),

// via a view
\JoshMoreno\Html\Html::make('Some Title')
    ->view('fields.example'),

// via a view with data
\JoshMoreno\Html\Html::make('Some Title')
    ->html(function() {
        return view('fields.example')
                 ->with('name', $this->name)
                 ->render();
    }),
```