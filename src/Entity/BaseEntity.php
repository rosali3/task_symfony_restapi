<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]

abstract class BaseEntity
{
    /**
     * @ORM\\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private createdAt;

    /**
     * @ORM\\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $dateUpdate;
    protected \DateTime $lastUpdateDate;
    private \DateTime $createDate;

    /**
     * @ORM\\PrePersist
     */
    public function setCreatedTimestamp(): void
    {
        $this->dateCreate = new \DateTimeImmutable();
        $this->dateUpdate = new \DateTimeImmutable();
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }
}
