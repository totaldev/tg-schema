<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a sponsored chat to Telegram moderators.
 */
class ReportSponsoredChat extends TdFunction
{
    public const TYPE_NAME = 'reportSponsoredChat';

    public function __construct(
        /**
         * Unique identifier of the sponsored chat.
         */
        protected int    $sponsoredChatUniqueId,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId
    ) {}

    public static function fromArray(array $array): ReportSponsoredChat
    {
        return new static(
            $array['sponsored_chat_unique_id'],
            $array['option_id'],
        );
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function getSponsoredChatUniqueId(): int
    {
        return $this->sponsoredChatUniqueId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'sponsored_chat_unique_id' => $this->sponsoredChatUniqueId,
            'option_id'                => $this->optionId,
        ];
    }
}
