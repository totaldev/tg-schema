<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Disconnect;

use Totaldev\TgSchema\TdFunction;

/**
 * Disconnects website from the current user's Telegram account.
 */
class DisconnectWebsite extends TdFunction
{
    public const TYPE_NAME = 'disconnectWebsite';

    public function __construct(
        /**
         * Website identifier.
         */
        protected int $websiteId
    ) {}

    public static function fromArray(array $array): DisconnectWebsite
    {
        return new static(
            $array['website_id'],
        );
    }

    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'website_id' => $this->websiteId,
        ];
    }
}
