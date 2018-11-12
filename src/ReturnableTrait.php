<?php

namespace Benjivm\Returnable;

trait ReturnableTrait
{
    /**
     * Boot the trait.
     */
    public static function bootReturnableTrait()
    {
        static::addGlobalScope(new ReturnableScope());
    }

    /**
     * Get the 'protected $returnable = []' columns.
     *
     * @return array
     */
    public function getReturnable()
    {
        if (! $this->returnable) {
            return ['*'];
        }

        return $this->returnable;
    }
}
