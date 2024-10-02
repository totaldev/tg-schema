<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes background from the list of installed backgrounds.
 */
class RemoveInstalledBackground extends TdFunction
{
    public const TYPE_NAME = 'removeInstalledBackground';

    public function __construct(
        /**
         * The background identifier.
         */
        protected int $backgroundId
    ) {}

    public static function fromArray(array $array): RemoveInstalledBackground
    {
        return new static(
            $array['background_id'],
        );
    }

    public function getBackgroundId(): int
    {
        return $this->backgroundId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'background_id' => $this->backgroundId,
        ];
    }
}
