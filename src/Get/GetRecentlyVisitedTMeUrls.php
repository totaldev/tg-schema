<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns t.me URLs recently visited by a newly registered user.
 */
class GetRecentlyVisitedTMeUrls extends TdFunction
{
    public const TYPE_NAME = 'getRecentlyVisitedTMeUrls';

    public function __construct(
        /**
         * Google Play referrer to identify the user.
         */
        protected string $referrer
    ) {}

    public static function fromArray(array $array): GetRecentlyVisitedTMeUrls
    {
        return new static(
            $array['referrer'],
        );
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }
}
