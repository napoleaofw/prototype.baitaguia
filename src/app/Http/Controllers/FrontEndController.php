<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Request;
use Route;

class FrontEndController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function map(Request $request)
    {
        // dd(Route::getRoutes());
        $data = [
            'routeRecordList' => Route::getRoutes()
        ];
        return view('page.map.index', $data);
    }

    public function home(Request $request)
    {
        return view('page.home.index');
    }

    public function auth(Request $request)
    {
        return view('page.auth.index');
    }

    public function search(Request $request)
    {
        $data = [
            'questionRecordList' => [
                [
                    'name' => 'Categorias',
                    'inputPlaceholder' => 'Escreva a categoria',
                    'filterRecordList' => [
                        [
                            'name' => '-- Todas as categorias --',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Clínicas e Diagnósticos',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Construção',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Farmácias e Drogarias',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Hospitais e Postos de Saúde',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Informática',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Religião',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Restaurantes',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Serviços de Assessoria',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Serviços de Engenharia e Arquitetura',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Serviços Médicos e Consultórios',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Transporte',
                            'uri' => '#'
                        ]
                    ]
                ],
                [
                    'name' => 'Subcategorias',
                    'inputPlaceholder' => 'Escreva a subcategoria',
                    'filterRecordList' => [
                        [
                            'name' => '-- Todas as subcategorias --',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Churrascarias',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Comida Chinesa',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Comida Variada',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Culinária Italiana',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Fast Food',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Frutos do Mar',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Lanchonetes',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Naturais',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Pizzarias',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Saladas',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Sorveterias',
                            'uri' => '#'
                        ]
                    ]
                ],
                [
                    'name' => 'Cidades',
                    'inputPlaceholder' => 'Escreva a cidade',
                    'filterRecordList' => [
                        [
                            'name' => '-- Todas as cidades --',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Campo Bom',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Dois Irmãos',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Estância Velha',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Ivoti',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Morro Reuter',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Novo Hamburgo',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Sapiranga',
                            'uri' => '#'
                        ]
                    ]
                ],
                [
                    'name' => 'Comodidades',
                    'inputPlaceholder' => 'Escreva a comodidade',
                    'filterRecordList' => [
                        [
                            'name' => '-- Todas as comodidades --',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Internet',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Internet sem fio',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Permitido animais',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Área para fumantes',
                            'uri' => '#'
                        ],
                        [
                            'name' => 'Área para crianças',
                            'uri' => '#'
                        ]
                    ]
                ]
            ]
        ];
        return view('page.search.index', $data);
    }

    public function advertisement(Request $request)
    {
        return view('page.advertisement.index');
    }

    public function account(Request $request)
    {
        return view('page.account.index');
    }

    public function profile(Request $request)
    {
        return view('page.profile.index');
    }

    public function createAdvertisement(Request $request)
    {
        return view('page.create-advertisement.index');
    }

    public function terms(Request $request)
    {
        return view('page.terms.index');
    }

    public function privacity(Request $request)
    {
        return view('page.privacity.index');
    }
    
}