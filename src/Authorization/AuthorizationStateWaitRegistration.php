<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Terms\TermsOfService;

/**
 * The user is unregistered and need to accept terms of service and enter their first name and last name to finish registration. Call registerUser to accept the terms of service and provide the data
 */
class AuthorizationStateWaitRegistration extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitRegistration';

    /**
     * Telegram terms of service
     *
     * @var TermsOfService
     */
    protected TermsOfService $termsOfService;

    public function __construct(TermsOfService $termsOfService)
    {
        parent::__construct();

        $this->termsOfService = $termsOfService;
    }

    public static function fromArray(array $array): AuthorizationStateWaitRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['terms_of_service']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'terms_of_service' => $this->termsOfService->typeSerialize(),
        ];
    }

    public function getTermsOfService(): TermsOfService
    {
        return $this->termsOfService;
    }
}
