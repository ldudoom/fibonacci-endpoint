<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Interfaces\FibonacciInterface;

class FibonacciController extends Controller
{

    protected FibonacciInterface $_fibonacci;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FibonacciInterface $fibonacci)
    {
        $this->_fibonacci = $fibonacci;
    }

    public function getFibonacciValue(int $index): JsonResponse{
        return response()->json(['fibonacci_value' => $this->_fibonacci->getValue($index)], Response::HTTP_OK);
    }
}
