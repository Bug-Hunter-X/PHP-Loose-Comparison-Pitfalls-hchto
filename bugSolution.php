The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison will only return true if both the value and the type are identical.

```php
function checkValue($value) {
  return $value === 10;
}

//This will return false, because '10' is a string and not an integer
var_dump(checkValue('10')); // bool(false)

//This will also return false, because 10.0 is a float and not an integer
var_dump(checkValue(10.0)); // bool(false)

//This will return false, because it is strictly not equal to 10
var_dump(checkValue(10.1)); // bool(false)

//This will return true, because it is strictly equal to 10
var_dump(checkValue(10)); // bool(true)
```
By using strict comparison, the function will now correctly identify only the integer value 10.