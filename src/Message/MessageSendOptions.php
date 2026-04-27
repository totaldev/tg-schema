<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Input\InputSuggestedPostInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Options to be used when a message is sent.
 */
class MessageSendOptions extends TdObject
{
    public const string TYPE_NAME = 'messageSendOptions';

    public function __construct(
        /**
         * Pass true to allow the message to ignore regular broadcast limits for a small fee; for bots only.
         */
        protected bool                    $allowPaidBroadcast,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                    $disableNotification,
        /**
         * Identifier of the effect to apply to the message; pass 0 if none; applicable only to sendMessage, sendMessageAlbum in private chats and forwardMessages with one message to private chats.
         */
        protected int                     $effectId,
        /**
         * Pass true if the message is sent from the background.
         */
        protected bool                    $fromBackground,
        /**
         * Pass true to get a fake message instead of actually sending them.
         */
        protected bool                    $onlyPreview,
        /**
         * The number of Telegram Stars the user agreed to pay to send the messages.
         */
        protected int                     $paidMessageStarCount,
        /**
         * Pass true if the content of the message must be protected from forwarding and saving; for bots only.
         */
        protected bool                    $protectContent,
        /**
         * Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
         */
        protected int                     $sendingId,
        /**
         * Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum.
         */
        protected bool                    $updateOrderOfInstalledStickerSets,
        /**
         * Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, to a chat with paid messages, to a channel direct messages chat, live location messages and self-destructing messages can't be scheduled.
         */
        protected ?MessageSchedulingState $schedulingState = null,
        /**
         * Information about the suggested post; pass null if none. For messages to channel direct messages chat only. Applicable only to sendMessage and addOffer.
         */
        protected ?InputSuggestedPostInfo $suggestedPostInfo = null,
    ) {}

    public static function fromArray(array $array): MessageSendOptions
    {
        return new static(
            allowPaidBroadcast               : $array['allow_paid_broadcast'],
            disableNotification              : $array['disable_notification'],
            effectId                         : $array['effect_id'],
            fromBackground                   : $array['from_background'],
            onlyPreview                      : $array['only_preview'],
            paidMessageStarCount             : $array['paid_message_star_count'],
            protectContent                   : $array['protect_content'],
            schedulingState                  : (isset($array['scheduling_state']) ? TdSchemaRegistry::fromArray($array['scheduling_state']) : null),
            sendingId                        : $array['sending_id'],
            suggestedPostInfo                : (isset($array['suggested_post_info']) ? TdSchemaRegistry::fromArray($array['suggested_post_info']) : null),
            updateOrderOfInstalledStickerSets: $array['update_order_of_installed_sticker_sets'],
        );
    }

    public function getAllowPaidBroadcast(): bool
    {
        return $this->allowPaidBroadcast;
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

    public function getSchedulingState(): ?MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    public function getSuggestedPostInfo(): ?InputSuggestedPostInfo
    {
        return $this->suggestedPostInfo;
    }

    public function getUpdateOrderOfInstalledStickerSets(): bool
    {
        return $this->updateOrderOfInstalledStickerSets;
    }

    public function setAllowPaidBroadcast(bool $value): static
    {
        $this->allowPaidBroadcast = $value;

        return $this;
    }

    public function setDisableNotification(bool $value): static
    {
        $this->disableNotification = $value;

        return $this;
    }

    public function setEffectId(int $value): static
    {
        $this->effectId = $value;

        return $this;
    }

    public function setFromBackground(bool $value): static
    {
        $this->fromBackground = $value;

        return $this;
    }

    public function setOnlyPreview(bool $value): static
    {
        $this->onlyPreview = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setProtectContent(bool $value): static
    {
        $this->protectContent = $value;

        return $this;
    }

    public function setSchedulingState(?MessageSchedulingState $value): static
    {
        $this->schedulingState = $value;

        return $this;
    }

    public function setSendingId(int $value): static
    {
        $this->sendingId = $value;

        return $this;
    }

    public function setSuggestedPostInfo(?InputSuggestedPostInfo $value): static
    {
        $this->suggestedPostInfo = $value;

        return $this;
    }

    public function setUpdateOrderOfInstalledStickerSets(bool $value): static
    {
        $this->updateOrderOfInstalledStickerSets = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                  => static::TYPE_NAME,
            'allow_paid_broadcast'                   => $this->allowPaidBroadcast,
            'disable_notification'                   => $this->disableNotification,
            'effect_id'                              => $this->effectId,
            'from_background'                        => $this->fromBackground,
            'only_preview'                           => $this->onlyPreview,
            'paid_message_star_count'                => $this->paidMessageStarCount,
            'protect_content'                        => $this->protectContent,
            'scheduling_state'                       => (null !== $this->schedulingState ? $this->schedulingState->jsonSerialize() : null),
            'sending_id'                             => $this->sendingId,
            'suggested_post_info'                    => (null !== $this->suggestedPostInfo ? $this->suggestedPostInfo->jsonSerialize() : null),
            'update_order_of_installed_sticker_sets' => $this->updateOrderOfInstalledStickerSets,
        ];
    }
}
