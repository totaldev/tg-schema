<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains custom information about the user
 */
class UserSupportInfo extends TdObject
{
    public const TYPE_NAME = 'userSupportInfo';

    /**
     * Information message
     *
     * @var FormattedText
     */
    protected FormattedText $message;

    /**
     * Information author
     *
     * @var string
     */
    protected string $author;

    /**
     * Information change date
     *
     * @var int
     */
    protected int $date;

    public function __construct(FormattedText $message, string $author, int $date)
    {
        $this->message = $message;
        $this->author = $author;
        $this->date = $date;
    }

    public static function fromArray(array $array): UserSupportInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['author'],
            $array['date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
            'author' => $this->author,
            'date' => $this->date,
        ];
    }

    public function getMessage(): FormattedText
    {
        return $this->message;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDate(): int
    {
        return $this->date;
    }
}
