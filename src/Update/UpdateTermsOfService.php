<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Terms\TermsOfService;

/**
 * New terms of service must be accepted by the user. If the terms of service are declined, then the deleteAccount method must be called with the reason
 * "Decline ToS update"
 */
class UpdateTermsOfService extends Update
{
    public const TYPE_NAME = 'updateTermsOfService';

    /**
     * The new terms of service
     *
     * @var TermsOfService
     */
    protected TermsOfService $termsOfService;

    /**
     * Identifier of the terms of service
     *
     * @var string
     */
    protected string $termsOfServiceId;

    public function __construct(string $termsOfServiceId, TermsOfService $termsOfService)
    {
        parent::__construct();

        $this->termsOfServiceId = $termsOfServiceId;
        $this->termsOfService = $termsOfService;
    }

    public static function fromArray(array $array): UpdateTermsOfService
    {
        return new static(
            $array['terms_of_service_id'],
            TdSchemaRegistry::fromArray($array['terms_of_service']),
        );
    }

    public function getTermsOfService(): TermsOfService
    {
        return $this->termsOfService;
    }

    public function getTermsOfServiceId(): string
    {
        return $this->termsOfServiceId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'terms_of_service_id' => $this->termsOfServiceId,
            'terms_of_service' => $this->termsOfService->typeSerialize(),
        ];
    }
}
