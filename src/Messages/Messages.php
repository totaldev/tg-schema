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
    public const string TYPE_NAME = 'messages';

    public function __construct(
        /**
         * List of messages; messages may be null.
         *
         * @var Message[]|null
         */
        protected ?array $messages,
        /**
         * Approximate total number of messages found.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): Messages
    {
        return new static(
            messages  : (isset($array['messages']) ? array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']) : null),
            totalCount: $array['total_count'],
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

    public function setMessages(?array $value): static
    {
        $this->messages = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'messages'    => (isset($this->messages) ? array_map(static fn($x) => $x->jsonSerialize(), $this->messages) : null),
            'total_count' => $this->totalCount,
        ];
    }
}
