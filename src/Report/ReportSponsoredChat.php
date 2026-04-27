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
    public const string TYPE_NAME = 'reportSponsoredChat';

    public function __construct(
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
        /**
         * Unique identifier of the sponsored chat.
         */
        protected int    $sponsoredChatUniqueId,
    ) {}

    public static function fromArray(array $array): ReportSponsoredChat
    {
        return new static(
            optionId             : $array['option_id'],
            sponsoredChatUniqueId: $array['sponsored_chat_unique_id'],
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

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function setSponsoredChatUniqueId(int $value): static
    {
        $this->sponsoredChatUniqueId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'option_id'                => $this->optionId,
            'sponsored_chat_unique_id' => $this->sponsoredChatUniqueId,
        ];
    }
}
