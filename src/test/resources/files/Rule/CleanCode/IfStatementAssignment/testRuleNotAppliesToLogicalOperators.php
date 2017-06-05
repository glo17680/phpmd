<?php
/**
 * This file is part of PHP Mess Detector.
 *
 * Copyright (c) Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Licensed under BSD License
 * For full copyright and license information, please see the LICENSE file.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Manuel Pichler <mapi@phpmd.org>
 * @copyright Manuel Pichler. All rights reserved.
 * @license https://opensource.org/licenses/bsd-license.php BSD License
 * @link http://phpmd.org/
 */

namespace PHPMDTest;

class Foo
{

    public function testRuleNotAppliesToLogicalOperators()
    {
        if (1 || 0) { // not applied
            // ...
        }
        if (1 && 1) { // not applied
            // ...
        }
        if (1 or 0) { // not applied
            // ...
        }
        if (1 and 1) { // not applied
            // ...
        }
        if (1 xor 1) { // not applied
            // ...
        }
        if (1 % 1) { // not applied
            // ...
        }
        if (1 || !1) { // not applied
            // ...
        }
        if (!1 % !1) { // not applied
            // ...
        }
    }
}
