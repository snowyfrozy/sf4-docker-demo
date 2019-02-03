<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController {

	/**
	 * @Route("/lucky/number2/{id }")
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


	/**
	 * @Route("/", name="blub")
	 */
	public function ianAction(Request $request) {

		// Find one by id


		// creates a task and gives it some dummy data for this example
		$task = new Task();
		$task->setTask('Write a blog post');
		$task->setDueDate(new \DateTime('tomorrow'));

		$form = $this->createFormBuilder($task)
		             ->add('task', TextType::class)
					 ->add('name', TextType::class)
		             ->add('dueDate', DateType::class)
		             ->add('save', SubmitType::class, ['label' => 'Create Task'])
		             ->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$task = $form->getData();

			// User Repo holen

			// Hash Vergleichen

			// If success => redirect auf dashboard
			return $this->redirectToRoute('app_lucky_number' );

			// If not, stay there


			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			// $entityManager = $this->getDoctrine()->getManager();
			// $entityManager->persist($task);
			// $entityManager->flush();

		}

		return $this->render('task/new.html.twig', [
			'taskForm' => $form->createView(),

		]);

	}
}