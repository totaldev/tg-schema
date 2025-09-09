<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user opened a sponsored chat.
 */
class OpenSponsoredChat extends TdFunction
{
    public const TYPE_NAME = 'openSponsoredChat';

    public function __construct(
        /**
         * Unique identifier of the sponsored chat.
         */
        protected int $sponsoredChatUniqueId
    ) {}

    public static function fromArray(array $array): OpenSponsoredChat
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
