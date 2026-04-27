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
    public const string TYPE_NAME = 'internalLinkTypeBuyStars';

    public function __construct(
        /**
         * Purpose of Telegram Star purchase. Arbitrary string specified by the server, for example, "subs" if the Telegram Stars are required to extend channel subscriptions.
         */
        protected string $purpose,
        /**
         * The number of Telegram Stars that must be owned by the user.
         */
        protected int    $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBuyStars
    {
        return new static(
            purpose  : $array['purpose'],
            starCount: $array['star_count'],
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

    public function setPurpose(string $value): static
    {
        $this->purpose = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'purpose'    => $this->purpose,
            'star_count' => $this->starCount,
        ];
    }
}
