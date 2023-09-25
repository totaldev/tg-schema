<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Applies if a user chooses some previously saved payment credentials. To use their previously saved credentials, the user must have a valid temporary password
 */
class InputCredentialsSaved extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsSaved';

    /**
     * Identifier of the saved credentials
     *
     * @var string
     */
    protected string $savedCredentialsId;

    public function __construct(string $savedCredentialsId)
    {
        parent::__construct();

        $this->savedCredentialsId = $savedCredentialsId;
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
            '@type' => static::TYPE_NAME,
            'saved_credentials_id' => $this->savedCredentialsId,
        ];
    }
}
