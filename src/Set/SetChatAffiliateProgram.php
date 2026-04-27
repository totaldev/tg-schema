<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Affiliate\AffiliateProgramParameters;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes affiliate program for a bot.
 */
class SetChatAffiliateProgram extends TdFunction
{
    public const string TYPE_NAME = 'setChatAffiliateProgram';

    public function __construct(
        /**
         * Identifier of the chat with an owned bot for which affiliate program is changed.
         */
        protected int                         $chatId,
        /**
         * Parameters of the affiliate program; pass null to close the currently active program. If there is an active program, then commission and program duration can only be increased. If the active program is scheduled to be closed, then it can't be changed anymore.
         */
        protected ?AffiliateProgramParameters $parameters = null,
    ) {}

    public static function fromArray(array $array): SetChatAffiliateProgram
    {
        return new static(
            chatId    : $array['chat_id'],
            parameters: (isset($array['parameters']) ? TdSchemaRegistry::fromArray($array['parameters']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getParameters(): ?AffiliateProgramParameters
    {
        return $this->parameters;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setParameters(?AffiliateProgramParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'parameters' => (null !== $this->parameters ? $this->parameters->jsonSerialize() : null),
        ];
    }
}
