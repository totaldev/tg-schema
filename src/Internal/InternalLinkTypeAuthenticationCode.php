<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link contains an authentication code. Call checkAuthenticationCode with the code if the current authorization state is authorizationStateWaitCode.
 */
class InternalLinkTypeAuthenticationCode extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeAuthenticationCode';

    public function __construct(
        /**
         * The authentication code.
         */
        protected string $code
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeAuthenticationCode
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
