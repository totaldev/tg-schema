<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A supergroup has been created from a basic group.
 */
class MessageChatUpgradeFrom extends MessageContent
{
    public const string TYPE_NAME = 'messageChatUpgradeFrom';

    public function __construct(
        /**
         * The identifier of the original basic group.
         */
        protected int    $basicGroupId,
        /**
         * Title of the newly created supergroup.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatUpgradeFrom
    {
        return new static(
            basicGroupId: $array['basic_group_id'],
            title       : $array['title'],
        );
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setBasicGroupId(int $value): static
    {
        $this->basicGroupId = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
            'title'          => $this->title,
        ];
    }
}
