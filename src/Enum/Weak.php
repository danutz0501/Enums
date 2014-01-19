<?php

namespace Enum;

/**
 * Enums deriving from the weak enum can have represented values
 * added freely.
 * 
 * @author Elliot Levin <elliot@aanet.com.au>
 */
abstract class Weak extends Base {
    public static function Representing($Value) {
        return forward_static_call(['parent', __FUNCTION__], $Value);
    }
}

?>