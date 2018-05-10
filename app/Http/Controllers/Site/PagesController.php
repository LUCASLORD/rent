<?php

namespace Locadora\Http\Controllers\Site;

use Illuminate\Http\Request;
use Locadora\Http\Controllers\Controller;
use Locadora\Repositories\PageRepository;

class PagesController extends Controller
{
    /**
     * @var PageRepository
     */
    private $repository;

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function about()
    {
        $page = $this->repository->findWhereIn('type',['sobre']);
        $dados = $page[0];

        return view('site.sobre', compact('dados'));
    }

    public function contact()
    {
        return view('site.contato');
    }


    public function vehicle()
    {
        return view('site.veiculo');
    }
}
