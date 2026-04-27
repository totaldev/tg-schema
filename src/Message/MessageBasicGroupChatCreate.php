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
    public const string TYPE_NAME = 'messageBasicGroupChatCreate';

    public function __construct(
        /**
         * User identifiers of members in the basic group.
         *
         * @var int[]
         */
        protected array  $memberUserIds,
        /**
         * Title of the basic group.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageBasicGroupChatCreate
    {
        return new static(
            memberUserIds: $array['member_user_ids'],
            title        : $array['title'],
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

    public function setMemberUserIds(array $value): static
    {
        $this->memberUserIds = $value;

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
            '@type'           => static::TYPE_NAME,
            'member_user_ids' => $this->memberUserIds,
            'title'           => $this->title,
        ];
    }
}
