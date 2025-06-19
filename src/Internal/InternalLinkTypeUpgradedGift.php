<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to an upgraded gift. Call getUpgradedGift with the given name to process the link.
 */
class InternalLinkTypeUpgradedGift extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUpgradedGift';

    public function __construct(
        /**
         * Name of the unique gift.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeUpgradedGift
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
