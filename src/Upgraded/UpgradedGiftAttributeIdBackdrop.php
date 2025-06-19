<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * Identifier of a gift backdrop.
 */
class UpgradedGiftAttributeIdBackdrop extends UpgradedGiftAttributeId
{
    public const TYPE_NAME = 'upgradedGiftAttributeIdBackdrop';

    public function __construct(
        /**
         * Identifier of the backdrop.
         */
        protected int $backdropId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeIdBackdrop
    {
        return new static(
            $array['backdrop_id'],
        );
    }

    public function getBackdropId(): int
    {
        return $this->backdropId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'backdrop_id' => $this->backdropId,
        ];
    }
}
