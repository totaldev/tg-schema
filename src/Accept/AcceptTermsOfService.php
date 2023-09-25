<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accept;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Accepts Telegram terms of services
 */
class AcceptTermsOfService extends TdFunction
{
    public const TYPE_NAME = 'acceptTermsOfService';

    /**
     * Terms of service identifier
     *
     * @var string
     */
    protected string $termsOfServiceId;

    public function __construct(string $termsOfServiceId)
    {
        $this->termsOfServiceId = $termsOfServiceId;
    }

    public static function fromArray(array $array): AcceptTermsOfService
    {
        return new static(
            $array['terms_of_service_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'terms_of_service_id' => $this->termsOfServiceId,
        ];
    }

    public function getTermsOfServiceId(): string
    {
        return $this->termsOfServiceId;
    }
}
