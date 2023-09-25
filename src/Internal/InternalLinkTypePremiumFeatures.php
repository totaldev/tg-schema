<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to the Premium features screen of the application from which the user can subscribe to Telegram Premium. Call getPremiumFeatures with the
 * given referrer to process the link
 */
class InternalLinkTypePremiumFeatures extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePremiumFeatures';

    /**
     * Referrer specified in the link
     *
     * @var string
     */
    protected string $referrer;

    public function __construct(string $referrer)
    {
        parent::__construct();

        $this->referrer = $referrer;
    }

    public static function fromArray(array $array): InternalLinkTypePremiumFeatures
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
            '@type' => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }
}
