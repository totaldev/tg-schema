<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a non-bundled message that is replied by a given message. Also, returns the pinned message for messagePinMessage, the game message
 * for messageGameScore, the invoice message for messagePaymentSuccessful, the message with a previously set same background for messageChatSetBackground, the
 * giveaway message for messageGiveawayCompleted, the checklist message for messageChecklistTasksDone, messageChecklistTasksAdded, the message with suggested
 * post information for messageSuggestedPostApprovalFailed, messageSuggestedPostApproved, messageSuggestedPostDeclined, messageSuggestedPostPaid,
 * messageSuggestedPostRefunded, the message with the regular gift that was upgraded for messageUpgradedGift with origin of the type upgradedGiftOriginUpgrade,
 * the message with gift purchase offer for messageUpgradedGiftPurchaseOfferRejected, the message with the request to disable content protection for
 * messageChatHasProtectedContentToggled, the message with the poll for messagePollOptionAdded and messagePollOptionDeleted, and the topic creation message for
 * topic messages without non-bundled replied message. Returns a 404 error if the message doesn't exist.
 */
class GetRepliedMessage extends TdFunction
{
    public const string TYPE_NAME = 'getRepliedMessage';

    public function __construct(
        /**
         * Identifier of the chat the message belongs to.
         */
        protected int $chatId,
        /**
         * Identifier of the reply message.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): GetRepliedMessage
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
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
