<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

/**
 * The user joins a chat and subscribes to regular payments in Telegram Stars.
 */
class TelegramPaymentPurposeJoinChat extends TelegramPaymentPurpose
{
    public const string TYPE_NAME = 'telegramPaymentPurposeJoinChat';

    public function __construct(
        /**
         * Invite link to use.
         */
        protected string $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposeJoinChat
    {
        return new static(
            inviteLink: $array['invite_link'],
        );
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }
}
