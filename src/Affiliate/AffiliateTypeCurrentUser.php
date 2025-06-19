<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate is the current user.
 */
class AffiliateTypeCurrentUser extends AffiliateType
{
    public const TYPE_NAME = 'affiliateTypeCurrentUser';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateTypeCurrentUser
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
