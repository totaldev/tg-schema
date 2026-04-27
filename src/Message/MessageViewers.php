<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of message viewers.
 */
class MessageViewers extends TdObject
{
    public const string TYPE_NAME = 'messageViewers';

    public function __construct(
        /**
         * List of message viewers.
         *
         * @var MessageViewer[]
         */
        protected array $viewers
    ) {}

    public static function fromArray(array $array): MessageViewers
    {
        return new static(
            viewers: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['viewers']),
        );
    }

    public function getViewers(): array
    {
        return $this->viewers;
    }

    public function setViewers(array $value): static
    {
        $this->viewers = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'viewers' => array_map(static fn($x) => $x->jsonSerialize(), $this->viewers),
        ];
    }
}
