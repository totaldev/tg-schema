<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The link is a link to an upgraded gift.
 */
class LinkPreviewTypeUpgradedGift extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeUpgradedGift';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeUpgradedGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gift'  => $this->gift->typeSerialize(),
        ];
    }
}
