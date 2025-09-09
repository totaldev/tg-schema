<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Telegram Star purchase section of the application.
 */
class InternalLinkTypeBuyStars extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBuyStars';

    public function __construct(
        /**
         * The number of Telegram Stars that must be owned by the user.
         */
        protected int    $starCount,
        /**
         * Purpose of Telegram Star purchase. Arbitrary string specified by the server, for example, "subs" if the Telegram Stars are required to extend channel subscriptions.
         */
        protected string $purpose,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBuyStars
    {
        return new static(
            $array['star_count'],
            $array['purpose'],
        );
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
            'purpose'    => $this->purpose,
        ];
    }
}
