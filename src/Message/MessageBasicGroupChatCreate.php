<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A newly created basic group.
 */
class MessageBasicGroupChatCreate extends MessageContent
{
    public const TYPE_NAME = 'messageBasicGroupChatCreate';

    public function __construct(
        /**
         * Title of the basic group.
         */
        protected string $title,
        /**
         * User identifiers of members in the basic group.
         *
         * @var int[]
         */
        protected array  $memberUserIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageBasicGroupChatCreate
    {
        return new static(
            $array['title'],
            $array['member_user_ids'],
        );
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'title'           => $this->title,
            'member_user_ids' => $this->memberUserIds,
        ];
    }
}
