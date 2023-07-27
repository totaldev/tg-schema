<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all available Telegram Passport elements
 */
class GetAllPassportElements extends TdFunction
{
    public const TYPE_NAME = 'getAllPassportElements';

    /**
     * The 2-step verification password of the current user
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public static function fromArray(array $array): GetAllPassportElements
    {
        return new static(
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
