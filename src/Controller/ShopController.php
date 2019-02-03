<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController {

	/**
	 * @Route("/")
	 */
	public function number() {
		$number = random_int( 0, 100 );

		//return $this->render('base.html.twig', [
		//	'number' => $number,
		//]);

		return $this->render('lucky/number.html.twig', [
			'number' => $number,
		]);
	}

}