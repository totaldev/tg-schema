<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A background from the server.
 */
class InputBackgroundRemote extends InputBackground
{
    public const TYPE_NAME = 'inputBackgroundRemote';

    public function __construct(
        /**
         * The background identifier.
         */
        protected int $backgroundId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputBackgroundRemote
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
