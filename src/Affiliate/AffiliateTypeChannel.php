<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate is a channel chat where the current user has can_post_messages administrator right.
 */
class AffiliateTypeChannel extends AffiliateType
{
    public const TYPE_NAME = 'affiliateTypeChannel';

    public function __construct(
        /**
         * Identifier of the channel chat.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateTypeChannel
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
