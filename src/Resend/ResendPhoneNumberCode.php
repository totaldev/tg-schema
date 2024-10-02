<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Resends the authentication code sent to a phone number. Works only if the previously received authenticationCodeInfo next_code_type was not null and the
 * server-specified timeout has passed.
 */
class ResendPhoneNumberCode extends TdFunction
{
    public const TYPE_NAME = 'resendPhoneNumberCode';

    public function __construct(
        /**
         * Reason of code resending; pass null if unknown.
         */
        protected ResendCodeReason $reason
    ) {}

    public static function fromArray(array $array): ResendPhoneNumberCode
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
