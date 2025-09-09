<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports that authentication code wasn't delivered via SMS; for official mobile applications only. Works only when the current authorization state is
 * authorizationStateWaitCode.
 */
class ReportAuthenticationCodeMissing extends TdFunction
{
    public const TYPE_NAME = 'reportAuthenticationCodeMissing';

    public function __construct(
        /**
         * Current mobile network code.
         */
        protected string $mobileNetworkCode
    ) {}

    public static function fromArray(array $array): ReportAuthenticationCodeMissing
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
