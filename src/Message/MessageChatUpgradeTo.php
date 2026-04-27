<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A basic group was upgraded to a supergroup and was deactivated as the result.
 */
class MessageChatUpgradeTo extends MessageContent
{
    public const string TYPE_NAME = 'messageChatUpgradeTo';

    public function __construct(
        /**
         * Identifier of the supergroup to which the basic group was upgraded.
         */
        protected int $supergroupId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatUpgradeTo
    {
        return new static(
            supergroupId: $array['supergroup_id'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
