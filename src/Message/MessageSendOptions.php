<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Options to be used when a message is sent.
 */
class MessageSendOptions extends TdObject
{
    public const TYPE_NAME = 'messageSendOptions';

    public function __construct(
        /**
         * Unique identifier of the topic in a channel direct messages chat administered by the current user; pass 0 if the chat isn't a channel direct messages chat administered by the current user.
         */
        protected int                    $directMessagesChatTopicId,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                   $disableNotification,
        /**
         * Pass true if the message is sent from the background.
         */
        protected bool                   $fromBackground,
        /**
         * Pass true if the content of the message must be protected from forwarding and saving; for bots only.
         */
        protected bool                   $protectContent,
        /**
         * Pass true to allow the message to ignore regular broadcast limits for a small fee; for bots only.
         */
        protected bool                   $allowPaidBroadcast,
        /**
         * The number of Telegram Stars the user agreed to pay to send the messages.
         */
        protected int                    $paidMessageStarCount,
        /**
         * Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum.
         */
        protected bool                   $updateOrderOfInstalledStickerSets,
        /**
         * Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, to a chat with paid messages, to a channel direct messages chat, live location messages and self-destructing messages can't be scheduled.
         */
        protected MessageSchedulingState $schedulingState,
        /**
         * Identifier of the effect to apply to the message; pass 0 if none; applicable only to sendMessage and sendMessageAlbum in private chats.
         */
        protected int                    $effectId,
        /**
         * Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
         */
        protected int                    $sendingId,
        /**
         * Pass true to get a fake message instead of actually sending them.
         */
        protected bool                   $onlyPreview,
    ) {}

    public static function fromArray(array $array): MessageSendOptions
    {
        return new static(
            $array['direct_messages_chat_topic_id'],
            $array['disable_notification'],
            $array['from_background'],
            $array['protect_content'],
            $array['allow_paid_broadcast'],
            $array['paid_message_star_count'],
            $array['update_order_of_installed_sticker_sets'],
            TdSchemaRegistry::fromArray($array['scheduling_state']),
            $array['effect_id'],
            $array['sending_id'],
            $array['only_preview'],
        );
    }

    public function getAllowPaidBroadcast(): bool
    {
        return $this->allowPaidBroadcast;
    }

    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function getFromBackground(): bool
    {
        return $this->fromBackground;
    }

    public function getOnlyPreview(): bool
    {
        return $this->onlyPreview;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    public function getSchedulingState(): MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    public function getUpdateOrderOfInstalledStickerSets(): bool
    {
        return $this->updateOrderOfInstalledStickerSets;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                  => static::TYPE_NAME,
            'direct_messages_chat_topic_id'          => $this->directMessagesChatTopicId,
            'disable_notification'                   => $this->disableNotification,
            'from_background'                        => $this->fromBackground,
            'protect_content'                        => $this->protectContent,
            'allow_paid_broadcast'                   => $this->allowPaidBroadcast,
            'paid_message_star_count'                => $this->paidMessageStarCount,
            'update_order_of_installed_sticker_sets' => $this->updateOrderOfInstalledStickerSets,
            'scheduling_state'                       => $this->schedulingState->typeSerialize(),
            'effect_id'                              => $this->effectId,
            'sending_id'                             => $this->sendingId,
            'only_preview'                           => $this->onlyPreview,
        ];
    }
}
