<?php

namespace Statamic\Addons\LeadingZero;

use Statamic\Extend\Modifier;

class LeadingZeroModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */

    public function index($value, $params, $context)
    {
      return str_pad($value, $params[0], '0', STR_PAD_LEFT);
    }
}
