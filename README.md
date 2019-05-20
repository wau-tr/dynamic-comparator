#Dynamic comparator
This component provides the functionality to compare two values by given comparison operator.
## Installation

You can install the package via composer:

    composer require wau/dynamic-comparator

###Usage
```php
...
use Wau\DynamicComparator\Traits\DynamicComparator;

class ExampleClass
{

    use DynamicComparator;
    
    public function index()
    {
        $a = 10;
        $b = 20;
        
        $this->is($a, '==', $b);  // false
        $this->is($a, '>=', $b);  // false
        $this->is($a, '!==', $b); // true
        $this->is($a, '!=', $b);  // true
    }
}

...

```

Full list of operators:

```
'==' - Equal
'===' - Identical
'!=' - Not equal
'!==' - Not identical
'>' - Greater than
'<' - Less than
'>=' - Greater than or equal to
'<=' - Less than or equal to
```

For more information [see documenation.](https://www.php.net/manual/en/language.operators.comparison.php)

    
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
