<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns full information about a supergroup or a channel by its identifier, cached for up to 1 minute.
 */
class GetSupergroupFullInfo extends TdFunction
{
    public const TYPE_NAME = 'getSupergroupFullInfo';

    public function __construct(
        /**
         * Supergroup or channel identifier.
         */
        protected int $supergroupId
    ) {}

    public static function fromArray(array $array): GetSupergroupFullInfo
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
