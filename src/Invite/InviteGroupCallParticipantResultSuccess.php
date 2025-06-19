<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The user was invited and a service message of the type messageGroupCall was sent which can be used in declineGroupCallInvitation to cancel the invitation.
 */
class InviteGroupCallParticipantResultSuccess extends InviteGroupCallParticipantResult
{
    public const TYPE_NAME = 'inviteGroupCallParticipantResultSuccess';

    public function __construct(
        /**
         * Identifier of the chat with the invitation message.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteGroupCallParticipantResultSuccess
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
