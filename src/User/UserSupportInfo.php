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
    public const string TYPE_NAME = 'userSupportInfo';

    public function __construct(
        /**
         * Information author.
         */
        protected string        $author,
        /**
         * Information change date.
         */
        protected int           $date,
        /**
         * Information message.
         */
        protected FormattedText $message,
    ) {}

    public static function fromArray(array $array): UserSupportInfo
    {
        return new static(
            author : $array['author'],
            date   : $array['date'],
            message: TdSchemaRegistry::fromArray($array['message']),
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

    public function setAuthor(string $value): static
    {
        $this->author = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setMessage(FormattedText $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'author'  => $this->author,
            'date'    => $this->date,
            'message' => $this->message->jsonSerialize(),
        ];
    }
}
