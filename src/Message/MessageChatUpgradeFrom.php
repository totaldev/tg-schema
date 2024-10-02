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
    public const TYPE_NAME = 'messageChatUpgradeFrom';

    public function __construct(
        /**
         * Title of the newly created supergroup.
         */
        protected string $title,
        /**
         * The identifier of the original basic group.
         */
        protected int    $basicGroupId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatUpgradeFrom
    {
        return new static(
            $array['title'],
            $array['basic_group_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'title'          => $this->title,
            'basic_group_id' => $this->basicGroupId,
        ];
    }
}
