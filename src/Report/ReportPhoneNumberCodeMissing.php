<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports that authentication code wasn't delivered via SMS to the specified phone number; for official mobile applications only.
 */
class ReportPhoneNumberCodeMissing extends TdFunction
{
    public const TYPE_NAME = 'reportPhoneNumberCodeMissing';

    public function __construct(
        /**
         * Current mobile network code.
         */
        protected string $mobileNetworkCode
    ) {}

    public static function fromArray(array $array): ReportPhoneNumberCodeMissing
    {
        return new static(
            $array['mobile_network_code'],
        );
    }

    public function getMobileNetworkCode(): string
    {
        return $this->mobileNetworkCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'mobile_network_code' => $this->mobileNetworkCode,
        ];
    }
}
