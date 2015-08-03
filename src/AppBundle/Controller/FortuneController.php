<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CategoryRepository;
use AppBundle\Entity\FortuneCookieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FortuneController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homepageAction(Request $request)
    {
        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Category');

        $search = $request->query->get('q');
        if ($search)
        {
            $categories = $categoryRepository->search($search);
        }
        else
        {
            /* Unused only for tutorial purposes */
//            $categories = $categoryRepository->findAllOrderedAscDql();
            $categories = $categoryRepository->findAllOrdered();
        }

        return $this->render('fortune/homepage.html.twig', [
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function showCategoryAction($id)
    {
        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Category');

        $category = $categoryRepository->findWithFortunesJoin($id);

        /** @var FortuneCookieRepository $fortuneRepository */
        $fortuneRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:FortuneCookie');
        /* Unused only for tutorial purposes */
//        $totalPrinted = $fortuneRepository->findTotalPrinted($category);
//        $fortuneRepository->plainSqlQuery($category);

        $categoryData = $fortuneRepository->findTotalAverageNameData($category);

        if (!$category) {
            throw $this->createNotFoundException();
        }

        return $this->render('fortune/showCategory.html.twig', [
            'category' => $category,
            'total' => $categoryData['total'],
            'average' => $categoryData['average'],
            'categoryName' => $categoryData['name'],
        ]);
    }
}
