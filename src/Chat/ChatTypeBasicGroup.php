<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A basic group (a chat with 0-200 other users).
 */
class ChatTypeBasicGroup extends ChatType
{
    public const TYPE_NAME = 'chatTypeBasicGroup';

    public function __construct(
        /**
         * Basic group identifier.
         */
        protected int $basicGroupId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTypeBasicGroup
    {
        return new static(
            $array['basic_group_id'],
        );
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
        ];
    }
}
