<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains custom information about the user.
 */
class UserSupportInfo extends TdObject
{
    public const TYPE_NAME = 'userSupportInfo';

    public function __construct(
        /**
         * Information message.
         */
        protected FormattedText $message,
        /**
         * Information author.
         */
        protected string        $author,
        /**
         * Information change date.
         */
        protected int           $date,
    ) {}

    public static function fromArray(array $array): UserSupportInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['author'],
            $array['date'],
        );
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMessage(): FormattedText
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
            'author'  => $this->author,
            'date'    => $this->date,
        ];
    }
}
