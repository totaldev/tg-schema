<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Resends an authentication code to the user. Works only when the current authorization state is authorizationStateWaitCode, the next_code_type of the result
 * is not null and the server-specified timeout has passed, or when the current authorization state is authorizationStateWaitEmailCode.
 */
class ResendAuthenticationCode extends TdFunction
{
    public const TYPE_NAME = 'resendAuthenticationCode';

    public function __construct(
        /**
         * Reason of code resending; pass null if unknown.
         */
        protected ResendCodeReason $reason
    ) {}

    public static function fromArray(array $array): ResendAuthenticationCode
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reason']),
        );
    }

    public function getReason(): ResendCodeReason
    {
        return $this->reason;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reason' => $this->reason->typeSerialize(),
        ];
    }
}
