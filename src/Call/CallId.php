<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the call identifier
 */
class CallId extends TdObject
{
    public const TYPE_NAME = 'callId';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function fromArray(array $array): CallId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
