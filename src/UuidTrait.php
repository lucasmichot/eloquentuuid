<?php namespace Lucasmichot\Eloquentuuid;

trait UuidTrait
{
    /**
     * Get a unique Base62-encoded UUID representing the current state for this instance.
     *
     * @return string
     */
    public function uuid()
    {
        $alphabet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $base16   = md5(serialize($this->toArray()));
        $base10   = base_convert($base16, 16, 10);
        $base62   = null;

        while ($base10)
        {
            $base62 = $alphabet[$base10 % 62].$base62;
            $base10 = floor($base10 / 62);
        };

        return $base62;
    }
}