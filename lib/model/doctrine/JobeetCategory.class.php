<?php

/**
 * JobeetCategory
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class JobeetCategory extends BaseJobeetCategory
{
  public function getActiveJobs(Doctrine_Query $q = null, $max = 10)
  {
    if (is_null($q))
    {
      $q = Doctrine_Query::create()
        ->from('JobeetJob j');
    }
  
    $q->andWhere('j.expires_at > ?', date('Y-m-d h:i:s', time()))
      ->addOrderBy('j.expires_at DESC')
      ->limit($max);
    return $q->execute();
  }
}

