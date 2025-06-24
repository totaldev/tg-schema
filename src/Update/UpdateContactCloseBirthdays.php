<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Close\CloseBirthdayUser;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of contacts that had birthdays recently or will have birthday soon has changed.
 */
class UpdateContactCloseBirthdays extends Update
{
    public const TYPE_NAME = 'updateContactCloseBirthdays';

    public function __construct(
        /**
         * List of contact users with close birthday.
         *
         * @var CloseBirthdayUser[]
         */
        protected array $closeBirthdayUsers
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateContactCloseBirthdays
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['close_birthday_users']),
        );
    }

    public function getCloseBirthdayUsers(): array
    {
        return $this->closeBirthdayUsers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->closeBirthdayUsers),
        ];
    }
}
