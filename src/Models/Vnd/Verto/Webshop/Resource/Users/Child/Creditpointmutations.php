<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Users\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Creditpointmutations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to creditpoinmutations collection
     */
    private string $href;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to creditpoinmutations collection
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to creditpoinmutations collection
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}