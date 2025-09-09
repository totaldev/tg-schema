<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a background. Call searchBackground with the given background name to process the link. If background is found and the user wants to
 * apply it, then call setDefaultBackground.
 */
class InternalLinkTypeBackground extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBackground';

    public function __construct(
        /**
         * Name of the background.
         */
        protected string $backgroundName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBackground
    {
        return new static(
            $array['background_name'],
        );
    }

    public function getBackgroundName(): string
    {
        return $this->backgroundName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'background_name' => $this->backgroundName,
        ];
    }
}
