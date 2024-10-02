<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A text shows instead of a raw mention of the user (e.g., when the user has no username).
 */
class TextEntityTypeMentionName extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeMentionName';

    public function __construct(
        /**
         * Identifier of the mentioned user.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeMentionName
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
