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
    public const TYPE_NAME = 'messageSenders';

    public function __construct(
        /**
         * Approximate total number of messages senders found.
         */
        protected int   $totalCount,
        /**
         * List of message senders.
         *
         * @var MessageSender[]
         */
        protected array $senders
    ) {}

    public static function fromArray(array $array): MessageSenders
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['senders']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'senders'     => array_map(static fn($x) => $x->typeSerialize(), $this->senders),
        ];
    }
}
