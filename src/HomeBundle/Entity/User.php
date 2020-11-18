<?php
/**
 * Created by PhpStorm.
 * User: AdemBenSalem
 * Date: 25/09/2020
 * Time: 10:04
 */

namespace HomeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected  $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }





}