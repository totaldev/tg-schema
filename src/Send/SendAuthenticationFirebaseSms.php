<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends Firebase Authentication SMS to the phone number of the user. Works only when the current authorization state is authorizationStateWaitCode and the server returned code of the type authenticationCodeTypeFirebaseAndroid or authenticationCodeTypeFirebaseIos
 */
class SendAuthenticationFirebaseSms extends TdFunction
{
    public const TYPE_NAME = 'sendAuthenticationFirebaseSms';

    /**
     * SafetyNet Attestation API token for the Android application, or secret from push notification for the iOS application
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public static function fromArray(array $array): SendAuthenticationFirebaseSms
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
