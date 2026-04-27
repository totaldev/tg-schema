<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Options to be used when a message content is copied without reference to the original sender. Service messages, messages with messageInvoice,
 * messagePaidMedia, messageGiveaway, or messageGiveawayWinners content can't be copied.
 */
class MessageCopyOptions extends TdObject
{
    public const string TYPE_NAME = 'messageCopyOptions';

    public function __construct(
        /**
         * True, if new caption must be shown above the media; otherwise, new caption must be shown below the media; not supported in secret chats. Ignored if replace_caption is false.
         */
        protected bool           $newShowCaptionAboveMedia,
        /**
         * True, if media caption of the message copy needs to be replaced. Ignored if send_copy is false.
         */
        protected bool           $replaceCaption,
        /**
         * True, if content of the message needs to be copied without reference to the original sender. Always true if the message is forwarded to a secret chat or is local. Use messageProperties.can_be_copied and messageProperties.can_be_copied_to_secret_chat to check whether the message is suitable.
         */
        protected bool           $sendCopy,
        /**
         * New message caption; pass null to copy message without caption. Ignored if replace_caption is false.
         */
        protected ?FormattedText $newCaption = null,
    ) {}

    public static function fromArray(array $array): MessageCopyOptions
    {
        return new static(
            newCaption              : (isset($array['new_caption']) ? TdSchemaRegistry::fromArray($array['new_caption']) : null),
            newShowCaptionAboveMedia: $array['new_show_caption_above_media'],
            replaceCaption          : $array['replace_caption'],
            sendCopy                : $array['send_copy'],
        );
    }

    public function getNewCaption(): ?FormattedText
    {
        return $this->newCaption;
    }

    public function getNewShowCaptionAboveMedia(): bool
    {
        return $this->newShowCaptionAboveMedia;
    }

    public function getReplaceCaption(): bool
    {
        return $this->replaceCaption;
    }

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function setNewCaption(?FormattedText $value): static
    {
        $this->newCaption = $value;

        return $this;
    }

    public function setNewShowCaptionAboveMedia(bool $value): static
    {
        $this->newShowCaptionAboveMedia = $value;

        return $this;
    }

    public function setReplaceCaption(bool $value): static
    {
        $this->replaceCaption = $value;

        return $this;
    }

    public function setSendCopy(bool $value): static
    {
        $this->sendCopy = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'new_caption'                  => (null !== $this->newCaption ? $this->newCaption->jsonSerialize() : null),
            'new_show_caption_above_media' => $this->newShowCaptionAboveMedia,
            'replace_caption'              => $this->replaceCaption,
            'send_copy'                    => $this->sendCopy,
        ];
    }
}
