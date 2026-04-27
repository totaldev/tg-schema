<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of message senders.
 */
class MessageSenders extends TdObject
{
    public const string TYPE_NAME = 'messageSenders';

    public function __construct(
        /**
         * List of message senders.
         *
         * @var MessageSender[]
         */
        protected array $senders,
        /**
         * Approximate total number of message senders found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): MessageSenders
    {
        return new static(
            senders   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['senders']),
            totalCount: $array['total_count'],
        );
    }

    public function getSenders(): array
    {
        return $this->senders;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setSenders(array $value): static
    {
        $this->senders = $value;

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
            'senders'     => array_map(static fn($x) => $x->jsonSerialize(), $this->senders),
            'total_count' => $this->totalCount,
        ];
    }
}
