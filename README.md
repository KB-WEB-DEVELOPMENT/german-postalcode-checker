 [1. Project Description](#project-description)
 
 [2. Installation](#installation)
 
 [3. Usage](#usage)
 
 [4. License](#license)
 
# Project Description

This PHP 8.0 package determines if a PHP variable of data type 'string' matches one of Germany postal codes (as of 2025).

# 2. Installation

Use composer to install the package: `composer require KB-WEB-DEVELOPMENT/german-postalcodes-checker`

You can run the Pest tests in the 'tests' directory with the command: `./vendor/bin/pest`

# 3. Usage

In your examples\index.php file: 

```php

<?php

require __DIR__ . '/../vendor/autoload.php';

use Kbarut\PostalCodes\PostalCodesChecker;

$postalCode = "01945";

$postalCodesChecker = new PostalCodesChecker();

$res = $postalCodesChecker->validate($postalCode);

 ```
# 4. License 

The MIT License (MIT)

Copyright (c) <2025> Kâmi Barut-Wanayo

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
