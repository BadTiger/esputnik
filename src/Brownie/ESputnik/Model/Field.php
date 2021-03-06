<?php
/**
 * @category    Brownie/ESputnik
 * @author      Brownie <oss.brownie@gmail.com>
 * @license     http://www.gnu.org/copyleft/lesser.html
 */

namespace Brownie\ESputnik\Model;

use Brownie\ESputnik\Model\Base\ArrayList;

/**
 * Additional field of contact.
 */
class Field extends ArrayList
{

    protected $fields = [
        'id' => null,
        'value' => null,
    ];
}
