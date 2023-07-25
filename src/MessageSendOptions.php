<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Options to be used when a message is sent
 */
class MessageSendOptions extends TdObject
{
    public const TYPE_NAME = 'messageSendOptions';

    /**
     * Pass true to disable notification for the message
     *
     * @var bool
     */
    protected bool $disableNotification;

    /**
     * Pass true if the message is sent from the background
     *
     * @var bool
     */
    protected bool $fromBackground;

    /**
     * Pass true if the content of the message must be protected from forwarding and saving; for bots only
     *
     * @var bool
     */
    protected bool $protectContent;

    /**
     * Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum
     *
     * @var bool
     */
    protected bool $updateOrderOfInstalledStickerSets;

    /**
     * Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, live location messages and self-destructing messages can't be scheduled
     *
     * @var MessageSchedulingState
     */
    protected MessageSchedulingState $schedulingState;

    /**
     * Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates
     *
     * @var int
     */
    protected int $sendingId;

    public function __construct(
        bool $disableNotification,
        bool $fromBackground,
        bool $protectContent,
        bool $updateOrderOfInstalledStickerSets,
        MessageSchedulingState $schedulingState,
        int $sendingId
    ) {
        $this->disableNotification = $disableNotification;
        $this->fromBackground = $fromBackground;
        $this->protectContent = $protectContent;
        $this->updateOrderOfInstalledStickerSets = $updateOrderOfInstalledStickerSets;
        $this->schedulingState = $schedulingState;
        $this->sendingId = $sendingId;
    }

    public static function fromArray(array $array): MessageSendOptions
    {
        return new static(
            $array['disable_notification'],
            $array['from_background'],
            $array['protect_content'],
            $array['update_order_of_installed_sticker_sets'],
            TdSchemaRegistry::fromArray($array['scheduling_state']),
            $array['sending_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'disable_notification' => $this->disableNotification,
            'from_background' => $this->fromBackground,
            'protect_content' => $this->protectContent,
            'update_order_of_installed_sticker_sets' => $this->updateOrderOfInstalledStickerSets,
            'scheduling_state' => $this->schedulingState->typeSerialize(),
            'sending_id' => $this->sendingId,
        ];
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getFromBackground(): bool
    {
        return $this->fromBackground;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    public function getUpdateOrderOfInstalledStickerSets(): bool
    {
        return $this->updateOrderOfInstalledStickerSets;
    }

    public function getSchedulingState(): MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }
}
