<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Products\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productreviews implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to collection of reviews.
     */
    private ?string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productreviews\Productreviews[]|null Array with review items
     */
    private ?array $collection;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to collection of reviews.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productreviews\Productreviews[]|null Array with review items
     */
    public function getCollection(): ?array
    {
        return $this->collection;
    }

    /**
     * @param string|null $href Link to collection of reviews.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productreviews\Productreviews|null ...$collection $collection Array with review items
     * @return self
     */
    public function setCollection(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productreviews\Productreviews ...$collection): self
    {
        $this->collection = $collection;
        return $this;
    }
}