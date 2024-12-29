This code snippet demonstrates a potential issue in PHP related to type juggling and loose comparison.  The function `checkValue` intends to check if a given value is equal to 10. However, due to PHP's loose comparison (`==`), it will return true for values that are not strictly equal to the integer 10 but can be converted to 10 during the comparison.

```php
function checkValue($value) {
  return $value == 10;
}

//This will return true, even though '10' is a string
var_dump(checkValue('10')); // bool(true)

// This will also return true
var_dump(checkValue(10.0)); // bool(true)

//This will return false, because it is strictly not equal to 10
var_dump(checkValue(10.1)); // bool(false)
```