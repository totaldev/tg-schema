<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link with a Telegram Premium gift code. Call checkPremiumGiftCode with the given code to process the link. If the code is valid and the user
 * wants to apply it, then call applyPremiumGiftCode.
 */
class InternalLinkTypePremiumGiftCode extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePremiumGiftCode';

    public function __construct(
        /**
         * The Telegram Premium gift code.
         */
        protected string $code
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePremiumGiftCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}
