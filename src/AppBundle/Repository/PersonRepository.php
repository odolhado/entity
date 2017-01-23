<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonRepository extends EntityRepository implements RepositoryInterface
{

    public function add($person)
    {
        $this->getEntityManager()->persist($person);
    }

    public function update($person)
    {
        $this->getEntityManager()->persist($person);
    }

    public function remove($person)
    {
        $this->getEntityManager()->remove($person);
    }

    public function flush()
    {
        $this->getEntityManager()->flush();
    }


}