<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a sponsored chat.
 */
class SponsoredChat extends TdObject
{
    public const string TYPE_NAME = 'sponsoredChat';

    public function __construct(
        /**
         * If non-empty, additional information about the sponsored chat to be shown along with the chat.
         */
        protected string $additionalInfo,
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Additional optional information about the sponsor to be shown along with the chat.
         */
        protected string $sponsorInfo,
        /**
         * Unique identifier of this result.
         */
        protected int    $uniqueId,
    ) {}

    public static function fromArray(array $array): SponsoredChat
    {
        return new static(
            additionalInfo: $array['additional_info'],
            chatId        : $array['chat_id'],
            sponsorInfo   : $array['sponsor_info'],
            uniqueId      : $array['unique_id'],
        );
    }

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSponsorInfo(): string
    {
        return $this->sponsorInfo;
    }

    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    public function setAdditionalInfo(string $value): static
    {
        $this->additionalInfo = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setSponsorInfo(string $value): static
    {
        $this->sponsorInfo = $value;

        return $this;
    }

    public function setUniqueId(int $value): static
    {
        $this->uniqueId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'additional_info' => $this->additionalInfo,
            'chat_id'         => $this->chatId,
            'sponsor_info'    => $this->sponsorInfo,
            'unique_id'       => $this->uniqueId,
        ];
    }
}
