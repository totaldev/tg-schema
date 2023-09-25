<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of message viewers
 */
class MessageViewers extends TdObject
{
    public const TYPE_NAME = 'messageViewers';

    /**
     * List of message viewers
     *
     * @var MessageViewer[]
     */
    protected array $viewers;

    public function __construct(array $viewers)
    {
        $this->viewers = $viewers;
    }

    public static function fromArray(array $array): MessageViewers
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['viewers']),
        );
    }

    public function getViewers(): array
    {
        return $this->viewers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->viewers),
        ];
    }
}
