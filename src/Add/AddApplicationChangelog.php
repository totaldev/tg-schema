<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds server-provided application changelog as messages to the chat 777000 (Telegram) or as a stories; for official applications only. Returns a 404 error if nothing changed
 */
class AddApplicationChangelog extends TdFunction
{
    public const TYPE_NAME = 'addApplicationChangelog';

    /**
     * The previous application version
     *
     * @var string
     */
    protected string $previousApplicationVersion;

    public function __construct(string $previousApplicationVersion)
    {
        $this->previousApplicationVersion = $previousApplicationVersion;
    }

    public static function fromArray(array $array): AddApplicationChangelog
    {
        return new static(
            $array['previous_application_version'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'previous_application_version' => $this->previousApplicationVersion,
        ];
    }

    public function getPreviousApplicationVersion(): string
    {
        return $this->previousApplicationVersion;
    }
}
