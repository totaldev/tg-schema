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
    public const string TYPE_NAME = 'verificationStatus';

    public function __construct(
        /**
         * Identifier of the custom emoji to be shown as verification sign provided by a bot for the user; 0 if none.
         */
        protected int  $botVerificationIconCustomEmojiId,
        /**
         * True, if the chat or the user is marked as fake by Telegram.
         */
        protected bool $isFake,
        /**
         * True, if the chat or the user is marked as scam by Telegram.
         */
        protected bool $isScam,
        /**
         * True, if the chat or the user is verified by Telegram.
         */
        protected bool $isVerified,
    ) {}

    public static function fromArray(array $array): VerificationStatus
    {
        return new static(
            botVerificationIconCustomEmojiId: $array['bot_verification_icon_custom_emoji_id'],
            isFake                          : $array['is_fake'],
            isScam                          : $array['is_scam'],
            isVerified                      : $array['is_verified'],
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

    public function setBotVerificationIconCustomEmojiId(int $value): static
    {
        $this->botVerificationIconCustomEmojiId = $value;

        return $this;
    }

    public function setIsFake(bool $value): static
    {
        $this->isFake = $value;

        return $this;
    }

    public function setIsScam(bool $value): static
    {
        $this->isScam = $value;

        return $this;
    }

    public function setIsVerified(bool $value): static
    {
        $this->isVerified = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                 => static::TYPE_NAME,
            'bot_verification_icon_custom_emoji_id' => $this->botVerificationIconCustomEmojiId,
            'is_fake'                               => $this->isFake,
            'is_scam'                               => $this->isScam,
            'is_verified'                           => $this->isVerified,
        ];
    }
}
