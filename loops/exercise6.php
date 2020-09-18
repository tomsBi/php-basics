<?php declare(strict_types=1);

$userInput = (integer)readline('Enter size(3/5/7): ');
if ($userInput === 5) {
    foreach (range(1, 32) as $characters) {
        if ($characters <= 16) {
            echo "/";
        } else {
            echo "\\";
        };
    };
    echo PHP_EOL;

    foreach (range(1, 32) as $characters) {
        if ($characters <= 12) {
            echo "/";
        } elseif ($characters > 12 && $characters <= 20) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 32) as $characters) {
        if ($characters <= 8) {
            echo "/";
        } elseif ($characters > 8 && $characters <= 24) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 32) as $characters) {
        if ($characters <= 4) {
            echo "/";
        } elseif ($characters > 4 && $characters <= 28) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 32) as $characters) {
        echo "*";
    };
    echo PHP_EOL;

} elseif ($userInput === 3) {
    foreach (range(1, 16) as $characters) {
        if ($characters <= 8) {
            echo "/";
        } else {
            echo "\\";
        };
    };
    echo PHP_EOL;

    foreach (range(1, 16) as $characters) {
        if ($characters <= 4) {
            echo "/";
        } elseif ($characters > 4 && $characters <= 12) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 16) as $characters) {
        echo "*";
    };
    echo PHP_EOL;
} elseif ($userInput === 7) {
    foreach (range(1, 48) as $characters) {
        if ($characters <= 24) {
            echo "/";
        } else {
            echo "\\";
        };
    };
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        if ($characters <= 20) {
            echo "/";
        } elseif ($characters > 20 && $characters <= 28) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        if ($characters <= 16) {
            echo "/";
        } elseif ($characters > 16 && $characters <= 32) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        if ($characters <= 12) {
            echo "/";
        } elseif ($characters > 12 && $characters <= 36) {
            echo "*";
        } else {
            echo "\\";
        }
    };
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        if ($characters <= 8) {
            echo "/";
        } elseif ($characters > 8 && $characters <= 40) {
            echo "*";
        } else {
            echo "\\";
        }
    }
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        if ($characters <= 4) {
            echo "/";
        } elseif ($characters > 4 && $characters <= 44) {
            echo "*";
        } else {
            echo "\\";
        }
    }
    echo PHP_EOL;

    foreach (range(1, 48) as $characters) {
        echo "*";
    };
    echo PHP_EOL;
}else{
    echo 'Error' . PHP_EOL;
}