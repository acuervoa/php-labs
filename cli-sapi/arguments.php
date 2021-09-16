<?php

echo "Number of arguments given :" . $argc . "\n";

echo "List of arguments given:\n";

print_r($argv);

// php -e arguments.php -i -b=big -l red white "and blue"
// php -e -f arguments.php -i -b=big -l red white "and blue"
// php -e -f arguments.php -- -i -b=big -l red white "and blue"