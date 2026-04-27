<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Quick;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a shortcut that can be used for a quick reply.
 */
class QuickReplyShortcut extends TdObject
{
    public const string TYPE_NAME = 'quickReplyShortcut';

    public function __construct(
        /**
         * The first shortcut message.
         */
        protected QuickReplyMessage $firstMessage,
        /**
         * Unique shortcut identifier.
         */
        protected int               $id,
        /**
         * The total number of messages in the shortcut.
         */
        protected int               $messageCount,
        /**
         * The name of the shortcut that can be used to use the shortcut.
         */
        protected string            $name,
    ) {}

    public static function fromArray(array $array): QuickReplyShortcut
    {
        return new static(
            firstMessage: TdSchemaRegistry::fromArray($array['first_message']),
            id          : $array['id'],
            messageCount: $array['message_count'],
            name        : $array['name'],
        );
    }

    public function getFirstMessage(): QuickReplyMessage
    {
        return $this->firstMessage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setFirstMessage(QuickReplyMessage $value): static
    {
        $this->firstMessage = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMessageCount(int $value): static
    {
        $this->messageCount = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'first_message' => $this->firstMessage->jsonSerialize(),
            'id'            => $this->id,
            'message_count' => $this->messageCount,
            'name'          => $this->name,
        ];
    }
}
