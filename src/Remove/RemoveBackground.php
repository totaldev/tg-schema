<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes background from the list of installed backgrounds
 */
class RemoveBackground extends TdFunction
{
    public const TYPE_NAME = 'removeBackground';

    /**
     * The background identifier
     *
     * @var int
     */
    protected int $backgroundId;

    public function __construct(int $backgroundId)
    {
        $this->backgroundId = $backgroundId;
    }

    public static function fromArray(array $array): RemoveBackground
    {
        return new static(
            $array['background_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background_id' => $this->backgroundId,
        ];
    }

    public function getBackgroundId(): int
    {
        return $this->backgroundId;
    }
}
