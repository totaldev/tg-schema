<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accept;

use Totaldev\TgSchema\TdFunction;

/**
 * Accepts Telegram terms of services.
 */
class AcceptTermsOfService extends TdFunction
{
    public const TYPE_NAME = 'acceptTermsOfService';

    public function __construct(
        /**
         * Terms of service identifier.
         */
        protected string $termsOfServiceId
    ) {}

    public static function fromArray(array $array): AcceptTermsOfService
    {
        return new static(
            $array['terms_of_service_id'],
        );
    }

    public function getTermsOfServiceId(): string
    {
        return $this->termsOfServiceId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'terms_of_service_id' => $this->termsOfServiceId,
        ];
    }
}
