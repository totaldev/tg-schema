<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Messages;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages.
 */
class Messages extends TdObject
{
    public const TYPE_NAME = 'messages';

    public function __construct(
        /**
         * Approximate total number of messages found.
         */
        protected int    $totalCount,
        /**
         * List of messages; messages may be null.
         *
         * @var Message[]|null
         */
        protected ?array $messages,
    ) {}

    public static function fromArray(array $array): Messages
    {
        return new static(
            $array['total_count'],
            isset($array['messages']) ? array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']) : null,
        );
    }

    public function getMessages(): ?array
    {
        return $this->messages;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            isset($this->messages) ? array_map(fn($x) => $x->typeSerialize(), $this->messages) : null,
        ];
    }
}
