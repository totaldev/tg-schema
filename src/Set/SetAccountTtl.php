<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Account\AccountTtl;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the period of inactivity after which the account of the current user will automatically be deleted
 */
class SetAccountTtl extends TdFunction
{
    public const TYPE_NAME = 'setAccountTtl';

    /**
     * New account TTL
     *
     * @var AccountTtl
     */
    protected AccountTtl $ttl;

    public function __construct(AccountTtl $ttl)
    {
        $this->ttl = $ttl;
    }

    public static function fromArray(array $array): SetAccountTtl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['ttl']),
        );
    }

    public function getTtl(): AccountTtl
    {
        return $this->ttl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'ttl' => $this->ttl->typeSerialize(),
        ];
    }
}
