<?php
/**
 * Created by PhpStorm.
 * User: LORD
 * Date: 27/04/2018
 * Time: 10:40
 */

namespace Locadora\Http\Controllers;


use Locadora\Repositories\RentRepository;

class RentsController extends Controller
{

    /**
     * @var RentRepository
     */
    private $repository;

    public function __construct(RentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $rents = $this->repository->paginate(5);

        return view('admin.rents.index', compact('rents'));
    }

    public function edit($id)
    {
        $list_status = [0 => 'Pendente',
                        1=> 'Pago',
                        2=> 'Cancelado'];
        $rent = $this->repository->find($id);

        return view('admin.rents.edit', compact('rent','list_status'));
    }
}