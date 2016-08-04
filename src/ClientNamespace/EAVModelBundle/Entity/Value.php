<?php

namespace ClientNamespace\EAVModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CleverAge\EAVManager\EAVModelBundle\Entity\Value as BaseValue;

/**
 * Value
 *
 * @ORM\Table(name="client_value", indexes={
 *     @ORM\Index(name="attribute", columns={"attribute_code"}),
 *     @ORM\Index(name="string_search", columns={"attribute_code", "string_value"}),
 *     @ORM\Index(name="int_search", columns={"attribute_code", "integer_value"})
 * })
 * @ORM\Entity(repositoryClass="CleverAge\EAVManager\EAVModelBundle\Entity\ValueRepository")
 */
class Value extends BaseValue
{
}
