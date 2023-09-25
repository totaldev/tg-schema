<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputPassportElementError;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs the user that some of the elements in their Telegram Passport contain errors; for bots only. The user will not be able to resend the elements, until
 * the errors are fixed
 */
class SetPassportElementErrors extends TdFunction
{
    public const TYPE_NAME = 'setPassportElementErrors';

    /**
     * The errors
     *
     * @var InputPassportElementError[]
     */
    protected array $errors;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, array $errors)
    {
        $this->userId = $userId;
        $this->errors = $errors;
    }

    public static function fromArray(array $array): SetPassportElementErrors
    {
        return new static(
            $array['user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['errors']),
        );
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            array_map(fn($x) => $x->typeSerialize(), $this->errors),
        ];
    }
}
