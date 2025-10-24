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
    public const string TYPE_NAME = 'resendPhoneNumberCode';

    public function __construct(
        /**
         * Reason of code resending; pass null if unknown.
         */
        protected ?ResendCodeReason $reason = null
    ) {}

    public static function fromArray(array $array): ResendPhoneNumberCode
    {
        return new static(
            isset($array['reason']) ? TdSchemaRegistry::fromArray($array['reason']) : null,
        );
    }

    public function getReason(): ?ResendCodeReason
    {
        return $this->reason;
    }

    public function setReason(?ResendCodeReason $value): static
    {
        $this->reason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reason' => $this->reason ?? null,
        ];
    }
}
