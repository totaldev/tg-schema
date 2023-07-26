<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Represents a list of message senders, which can be used to send messages in a chat
 */
class ChatMessageSenders extends TdObject
{
    public const TYPE_NAME = 'chatMessageSenders';

    /**
     * List of available message senders
     *
     * @var ChatMessageSender[]
     */
    protected array $senders;

    public function __construct(array $senders)
    {
        $this->senders = $senders;
    }

    public static function fromArray(array $array): ChatMessageSenders
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['senders']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->senders),
        ];
    }

    public function getSenders(): array
    {
        return $this->senders;
    }
}
