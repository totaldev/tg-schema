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
         * Unique shortcut identifier.
         */
        protected int               $id,
        /**
         * The name of the shortcut that can be used to use the shortcut.
         */
        protected string            $name,
        /**
         * The first shortcut message.
         */
        protected QuickReplyMessage $firstMessage,
        /**
         * The total number of messages in the shortcut.
         */
        protected int               $messageCount,
    ) {}

    public static function fromArray(array $array): QuickReplyShortcut
    {
        return new static(
            $array['id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['first_message']),
            $array['message_count'],
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
            'id'            => $this->id,
            'name'          => $this->name,
            'first_message' => $this->firstMessage->typeSerialize(),
            'message_count' => $this->messageCount,
        ];
    }
}
