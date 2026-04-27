<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A PNG or TGV (gzipped subset of SVG with MIME type "application/x-tgwallpattern") pattern to be combined with the background fill chosen by the user.
 */
class BackgroundTypePattern extends BackgroundType
{
    public const string TYPE_NAME = 'backgroundTypePattern';

    public function __construct(
        /**
         * Fill of the background.
         */
        protected BackgroundFill $fill,
        /**
         * Intensity of the pattern when it is shown above the filled background; 0-100.
         */
        protected int            $intensity,
        /**
         * True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
         */
        protected bool           $isInverted,
        /**
         * True, if the background needs to be slightly moved when device is tilted.
         */
        protected bool           $isMoving,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundTypePattern
    {
        return new static(
            fill      : TdSchemaRegistry::fromArray($array['fill']),
            intensity : $array['intensity'],
            isInverted: $array['is_inverted'],
            isMoving  : $array['is_moving'],
        );
    }

    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    public function getIntensity(): int
    {
        return $this->intensity;
    }

    public function getIsInverted(): bool
    {
        return $this->isInverted;
    }

    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }

    public function setFill(BackgroundFill $value): static
    {
        $this->fill = $value;

        return $this;
    }

    public function setIntensity(int $value): static
    {
        $this->intensity = $value;

        return $this;
    }

    public function setIsInverted(bool $value): static
    {
        $this->isInverted = $value;

        return $this;
    }

    public function setIsMoving(bool $value): static
    {
        $this->isMoving = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'fill'        => $this->fill->jsonSerialize(),
            'intensity'   => $this->intensity,
            'is_inverted' => $this->isInverted,
            'is_moving'   => $this->isMoving,
        ];
    }
}
