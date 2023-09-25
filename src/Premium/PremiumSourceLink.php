<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user opened an internal link of the type internalLinkTypePremiumFeatures
 */
class PremiumSourceLink extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceLink';

    /**
     * The referrer from the link
     *
     * @var string
     */
    protected string $referrer;

    public function __construct(string $referrer)
    {
        parent::__construct();

        $this->referrer = $referrer;
    }

    public static function fromArray(array $array): PremiumSourceLink
    {
        return new static(
            $array['referrer'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }
}
