<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate is a bot owned by the current user.
 */
class AffiliateTypeBot extends AffiliateType
{
    public const string TYPE_NAME = 'affiliateTypeBot';

    public function __construct(
        /**
         * User identifier of the bot.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateTypeBot
    {
        return new static(
            userId: $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
