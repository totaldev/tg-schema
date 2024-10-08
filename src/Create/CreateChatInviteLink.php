<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a new invite link for a chat. Available for basic groups, supergroups, and channels. Requires administrator privileges and can_invite_users right in
 * the chat.
 */
class CreateChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'createChatInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Invite link name; 0-32 characters.
         */
        protected string $name,
        /**
         * Point in time (Unix timestamp) when the link will expire; pass 0 if never.
         */
        protected int    $expirationDate,
        /**
         * The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited.
         */
        protected int    $memberLimit,
        /**
         * Pass true if users joining the chat via the link need to be approved by chat administrators. In this case, member_limit must be 0.
         */
        protected bool   $createsJoinRequest,
    ) {}

    public static function fromArray(array $array): CreateChatInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['name'],
            $array['expiration_date'],
            $array['member_limit'],
            $array['creates_join_request'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'name'                 => $this->name,
            'expiration_date'      => $this->expirationDate,
            'member_limit'         => $this->memberLimit,
            'creates_join_request' => $this->createsJoinRequest,
        ];
    }
}
