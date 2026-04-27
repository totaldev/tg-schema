<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Terms\TermsOfService;

/**
 * The user is unregistered and needs to accept terms of service and enter their first name and last name to finish registration. Call registerUser to accept
 * the terms of service and provide the data.
 */
class AuthorizationStateWaitRegistration extends AuthorizationState
{
    public const string TYPE_NAME = 'authorizationStateWaitRegistration';

    public function __construct(
        /**
         * Telegram terms of service.
         */
        protected TermsOfService $termsOfService
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitRegistration
    {
        return new static(
            termsOfService: TdSchemaRegistry::fromArray($array['terms_of_service']),
        );
    }

    public function getTermsOfService(): TermsOfService
    {
        return $this->termsOfService;
    }

    public function setTermsOfService(TermsOfService $value): static
    {
        $this->termsOfService = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'terms_of_service' => $this->termsOfService->jsonSerialize(),
        ];
    }
}
