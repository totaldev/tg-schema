<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a supergroup or a channel by its identifier. This is an offline request if the current user is not a bot.
 */
class GetSupergroup extends TdFunction
{
    public const TYPE_NAME = 'getSupergroup';

    public function __construct(
        /**
         * Supergroup or channel identifier.
         */
        protected int $supergroupId
    ) {}

    public static function fromArray(array $array): GetSupergroup
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
