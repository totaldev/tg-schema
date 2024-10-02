<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\Authentication\AuthenticationCodeInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * TDLib needs the user's authentication code to authorize. Call checkAuthenticationCode to check the code.
 */
class AuthorizationStateWaitCode extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitCode';

    public function __construct(
        /**
         * Information about the authorization code that was sent.
         */
        protected AuthenticationCodeInfo $codeInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitCode
    {
        return new static(
            TdSchemaRegistry::fromArray($array['code_info']),
        );
    }

    public function getCodeInfo(): AuthenticationCodeInfo
    {
        return $this->codeInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'code_info' => $this->codeInfo->typeSerialize(),
        ];
    }
}
