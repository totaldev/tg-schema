<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * A button with a user reference to be handled in the same way as textEntityTypeMentionName entities.
 */
class InlineKeyboardButtonTypeUser extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeUser';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeUser
    {
        return new static(
            $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
