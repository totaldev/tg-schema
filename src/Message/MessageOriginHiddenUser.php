<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was originally sent by a user, which is hidden by their privacy settings.
 */
class MessageOriginHiddenUser extends MessageOrigin
{
    public const string TYPE_NAME = 'messageOriginHiddenUser';

    public function __construct(
        /**
         * Name of the sender.
         */
        protected string $senderName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginHiddenUser
    {
        return new static(
            $array['sender_name'],
        );
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setSenderName(string $value): static
    {
        $this->senderName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sender_name' => $this->senderName,
        ];
    }
}
