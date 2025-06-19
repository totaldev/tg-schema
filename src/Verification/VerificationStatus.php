<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Verification;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about verification status of a chat or a user.
 */
class VerificationStatus extends TdObject
{
    public const TYPE_NAME = 'verificationStatus';

    public function __construct(
        /**
         * True, if the chat or the user is verified by Telegram.
         */
        protected bool $isVerified,
        /**
         * True, if the chat or the user is marked as scam by Telegram.
         */
        protected bool $isScam,
        /**
         * True, if the chat or the user is marked as fake by Telegram.
         */
        protected bool $isFake,
        /**
         * Identifier of the custom emoji to be shown as verification sign provided by a bot for the user; 0 if none.
         */
        protected int  $botVerificationIconCustomEmojiId
    ) {}

    public static function fromArray(array $array): VerificationStatus
    {
        return new static(
            $array['is_verified'],
            $array['is_scam'],
            $array['is_fake'],
            $array['bot_verification_icon_custom_emoji_id'],
        );
    }

    public function getBotVerificationIconCustomEmojiId(): int
    {
        return $this->botVerificationIconCustomEmojiId;
    }

    public function getIsFake(): bool
    {
        return $this->isFake;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                 => static::TYPE_NAME,
            'is_verified'                           => $this->isVerified,
            'is_scam'                               => $this->isScam,
            'is_fake'                               => $this->isFake,
            'bot_verification_icon_custom_emoji_id' => $this->botVerificationIconCustomEmojiId,
        ];
    }
}
