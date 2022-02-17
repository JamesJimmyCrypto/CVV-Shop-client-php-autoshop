<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Colors;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

/**
 * This class is autogenerated.
 */
class All implements Parameter
{
    use FromArray;

    /**
     * @var string|null A hex code, multicolor, transparent to filter that color.
     */
    private ?string $color = null;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    public static function fromUrl(?string $url): ?static
    {
        if ($url === null) {
            return null;
        }

        return static::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('color', $this->color);
    }

    /**
     * @return string|null A hex code, multicolor, transparent to filter that color.
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color A hex code, multicolor, transparent to filter that color.
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }
}