syntaxed-plugin
===============

##A simple code syntax highlighter for October CMS.


The plugin includes prism syntax highlighter on your pages. Add the component to your page and render it with the component tag:

```php
{% component 'syntaxed' %}
```

There are no Component Settings yet all code syntax goes in the CMS markup as shown below:

<p> CSS Highlighted Code </p>

```
<pre><code class="language-css">div { background-color: gray }</code></pre>
```

<p> PHP Highlighted Code </p>

```
<pre><code class="language-php">
    class Person{
        
        public $name;
        public $age;
        
        function Person(){
            $this->name = $name;
            $this->age = $age;
        }
    }
</code></pre>
```