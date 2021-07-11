<?php

namespace App\Repository;

use App\Entity\Patient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Patient|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patient|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patient[]    findAll()
 * @method Patient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patient::class);
    }

    // /**
    //  * @return Patient[] Returns an array of Patient objects
    //  */

    public function searchPatient($critere)
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.user','ages')
            ->where('ages.age = :agePatient')
            ->setParameter('agePatient', $critere['age']->getAge())
            ->andWhere('p.pathologie = :pathologie')
            ->setParameter('pathologie', $critere['pathologie'])
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
     
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
    public function findOneBySomeField($value): ?Patient
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
