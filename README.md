# PHP Loose Comparison Pitfalls
This repository demonstrates a common yet subtle bug in PHP programming related to loose comparison (`==`) and type juggling.  Loose comparison can lead to unexpected results when comparing values of different data types. The `bug.php` file showcases this issue, while `bugSolution.php` provides a solution using strict comparison (`===`).  Understanding the difference between loose and strict comparison is crucial for writing robust and reliable PHP code.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected results due to loose comparison.
4. Compare the output with `bugSolution.php` to see how strict comparison resolves the issue.

## Solution
Always use strict comparison (`===`) whenever possible to avoid type juggling issues.  Strict comparison checks both the value and the type of the operands.