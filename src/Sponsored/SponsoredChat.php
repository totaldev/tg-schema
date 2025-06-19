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
    public const TYPE_NAME = 'sponsoredChat';

    public function __construct(
        /**
         * Unique identifier of this result.
         */
        protected int    $uniqueId,
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Additional optional information about the sponsor to be shown along with the chat.
         */
        protected string $sponsorInfo,
        /**
         * If non-empty, additional information about the sponsored chat to be shown along with the chat.
         */
        protected string $additionalInfo
    ) {}

    public static function fromArray(array $array): SponsoredChat
    {
        return new static(
            $array['unique_id'],
            $array['chat_id'],
            $array['sponsor_info'],
            $array['additional_info'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'unique_id'       => $this->uniqueId,
            'chat_id'         => $this->chatId,
            'sponsor_info'    => $this->sponsorInfo,
            'additional_info' => $this->additionalInfo,
        ];
    }
}
