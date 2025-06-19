<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\View;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user fully viewed a sponsored chat.
 */
class ViewSponsoredChat extends TdFunction
{
    public const TYPE_NAME = 'viewSponsoredChat';

    public function __construct(
        /**
         * Unique identifier of the sponsored chat.
         */
        protected int $sponsoredChatUniqueId
    ) {}

    public static function fromArray(array $array): ViewSponsoredChat
    {
        return new static(
            $array['sponsored_chat_unique_id'],
        );
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
        ];
    }
}
