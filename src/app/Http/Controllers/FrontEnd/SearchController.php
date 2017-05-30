<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Request;

class SearchController extends BaseController
{

    public function index(Request $request)
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

}