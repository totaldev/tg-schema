<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * An authentication code is delivered via Firebase Authentication to the official Android application
 */
class AuthenticationCodeTypeFirebaseAndroid extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFirebaseAndroid';

    /**
     * Nonce to pass to the SafetyNet Attestation API
     *
     * @var string
     */
    protected string $nonce;

    /**
     * Length of the code
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $nonce, int $length)
    {
        parent::__construct();

        $this->nonce = $nonce;
        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFirebaseAndroid
    {
        return new static(
            $array['nonce'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'nonce' => $this->nonce,
            'length' => $this->length,
        ];
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
