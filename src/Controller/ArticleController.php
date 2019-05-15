<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
  /** 
  * @Route("/")
  */
  public function homepage()
  {
    return new Response('hello world');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
    return new Response(sprintf(
      'future site of article: %s',
      $slug
    ));
  }
}