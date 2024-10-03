<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the call identifier.
 */
class CallId extends TdObject
{
    public const TYPE_NAME = 'callId';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int $id
    ) {}

    public static function fromArray(array $array): CallId
    {
        return new static(
            $array['id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }
}
