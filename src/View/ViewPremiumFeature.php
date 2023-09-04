<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\View;

use Totaldev\TgSchema\Premium\PremiumFeature;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs TDLib that the user viewed detailed information about a Premium feature on the Premium features screen
 */
class ViewPremiumFeature extends TdFunction
{
    public const TYPE_NAME = 'viewPremiumFeature';

    /**
     * The viewed premium feature
     *
     * @var PremiumFeature
     */
    protected PremiumFeature $feature;

    public function __construct(PremiumFeature $feature)
    {
        $this->feature = $feature;
    }

    public static function fromArray(array $array): ViewPremiumFeature
    {
        return new static(
            TdSchemaRegistry::fromArray($array['feature']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'feature' => $this->feature->typeSerialize(),
        ];
    }

    public function getFeature(): PremiumFeature
    {
        return $this->feature;
    }
}
