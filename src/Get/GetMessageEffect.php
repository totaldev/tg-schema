<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a message effect. Returns a 404 error if the effect is not found.
 */
class GetMessageEffect extends TdFunction
{
    public const TYPE_NAME = 'getMessageEffect';

    public function __construct(
        /**
         * Unique identifier of the effect.
         */
        protected int $effectId
    ) {}

    public static function fromArray(array $array): GetMessageEffect
    {
        return new static(
            $array['effect_id'],
        );
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'effect_id' => $this->effectId,
        ];
    }
}
