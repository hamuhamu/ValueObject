# ValueObject
ValueObject pattern

### Usage

```php
<?php
class Human extends ValueObject
{
    protected $height;
    protected $weight;
}

$human = new Human(['height' => 100, 'weight' => 60,]);
// output：100
echo $human->height;
// output：Exception: undefined property hoge
echo $human->hoge;

```
