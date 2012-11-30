<?php
namespace Payum\Examples\Entity;

use Doctrine\ORM\Mapping as ORM;

use Payum\Bridge\Doctrine\Entity\SimpleSellRequest as BaseSimpleSellRequest;

/**
 * @ORM\Entity
 */
class SimpleSellRequest extends BaseSimpleSellRequest
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     * @var integer $id
     */
    protected $id; 
}