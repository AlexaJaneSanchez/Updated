<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierStoreRequest;
use App\Http\Requests\SupplierUpdateRequest;
use App\Interface\Service\SupplierServiceInterface;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private $supplierService;

    public function __construct(SupplierServiceInterface $supplierService)
    {
        $this->supplierService = $supplierService;
    }

    public function index()
    {
        return $this->supplierService->findSuppliers();
    }

    public function show(int $supplierID)
    {
        return $this->supplierService->findSupplierById($supplierID);
    }

    public function store(SupplierStoreRequest $request)
    {
        return $this->supplierService->createSupplier($request);
    }

    public function update(SupplierUpdateRequest $request, int $supplierID)
    {
        return $this->supplierService->updateSupplier($request, $supplierID);
    }

    public function destroy(int $supplierID)
    {
        return $this->supplierService->removeSupplier($supplierID);
    }
}
