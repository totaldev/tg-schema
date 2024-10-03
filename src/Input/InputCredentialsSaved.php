<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * Applies if a user chooses some previously saved payment credentials. To use their previously saved credentials, the user must have a valid temporary
 * password.
 */
class InputCredentialsSaved extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsSaved';

    public function __construct(
        /**
         * Identifier of the saved credentials.
         */
        protected string $savedCredentialsId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputCredentialsSaved
    {
        return new static(
            $array['saved_credentials_id'],
        );
    }

    public function getSavedCredentialsId(): string
    {
        return $this->savedCredentialsId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'saved_credentials_id' => $this->savedCredentialsId,
        ];
    }
}
