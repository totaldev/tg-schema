<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns already available Telegram Passport elements suitable for completing a Telegram Passport authorization form. Result can be received only once for
 * each authorization form.
 */
class GetPassportAuthorizationFormAvailableElements extends TdFunction
{
    public const TYPE_NAME = 'getPassportAuthorizationFormAvailableElements';

    public function __construct(
        /**
         * Authorization form identifier.
         */
        protected int    $authorizationFormId,
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password,
    ) {}

    public static function fromArray(array $array): GetPassportAuthorizationFormAvailableElements
    {
        return new static(
            $array['authorization_form_id'],
            $array['password'],
        );
    }

    public function getAuthorizationFormId(): int
    {
        return $this->authorizationFormId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'authorization_form_id' => $this->authorizationFormId,
            'password'              => $this->password,
        ];
    }
}
