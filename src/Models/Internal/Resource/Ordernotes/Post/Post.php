<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Ordernotes\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null The text of this note.
     */
    private ?string $note;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null The text of this note.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note The text of this note.
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }
}