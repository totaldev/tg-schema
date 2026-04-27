<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the emoji status of a user; for bots only.
 */
class SetUserEmojiStatus extends TdFunction
{
    public const string TYPE_NAME = 'setUserEmojiStatus';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int          $userId,
        /**
         * New emoji status; pass null to switch to the default badge.
         */
        protected ?EmojiStatus $emojiStatus = null,
    ) {}

    public static function fromArray(array $array): SetUserEmojiStatus
    {
        return new static(
            emojiStatus: (isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null),
            userId     : $array['user_id'],
        );
    }

    public function getEmojiStatus(): ?EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setEmojiStatus(?EmojiStatus $value): static
    {
        $this->emojiStatus = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'emoji_status' => (null !== $this->emojiStatus ? $this->emojiStatus->jsonSerialize() : null),
            'user_id'      => $this->userId,
        ];
    }
}
