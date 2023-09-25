<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks the 2-step verification password for correctness. Works only when the current authorization state is authorizationStateWaitPassword
 */
class CheckAuthenticationPassword extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationPassword';

    /**
     * The 2-step verification password to check
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public static function fromArray(array $array): CheckAuthenticationPassword
    {
        return new static(
            $array['password'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }
}
