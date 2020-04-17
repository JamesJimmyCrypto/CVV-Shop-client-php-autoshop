<?php

namespace JacobDeKeizer\Ccv\Models;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Href implements Model
{
    use FromArray;

    private $href;

    public static function fromArray(array $data): Href
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::createFromArray($data);
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
