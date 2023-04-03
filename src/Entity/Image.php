<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]

class Image
{
    #[ORM\Column(length: 255)]
    private ?string $title = null;

}