<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the editable username of the current user
 */
class SetUsername extends TdFunction
{
    public const TYPE_NAME = 'setUsername';

    /**
     * The new value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username
     *
     * @var string
     */
    protected string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public static function fromArray(array $array): SetUsername
    {
        return new static(
            $array['username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
