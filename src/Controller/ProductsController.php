<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Filter\PromotionsFilterInterface;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: 'POST')]
    public function lowestPrices(
        Request $request,
        int $id,
        DTOSerializer $serializer,
        PromotionsFilterInterface $filter
    ): Response
    {
        /** @var LowestPriceEnquiry $lowestPriceEnquire */
        $lowestPriceEnquire = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        $modifiedEnquire = $filter->apply($lowestPriceEnquire);
        $responseContent = $serializer->serialize($modifiedEnquire, 'json');


        return new Response($responseContent, 200);
    }


    #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]
    public function promotions()
    {

    }
}