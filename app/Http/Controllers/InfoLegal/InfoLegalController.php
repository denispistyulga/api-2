<?php

namespace App\Http\Controllers\InfoLegal;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\InfoLegal;
use App\Models\LegalElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ramsey\Collection\Map\AssociativeArrayMap;


class InfoLegalController extends Controller
{
    public function tinkoff1 (){
        return view('/main/tinkoff');
    }

    public function tinkoff (){
        return view('/main/tinkoff');
    }


    public function payshow (){
        return view('/main/style');
    }

    public function index (){
        return view('/main/index');
    }

//Получаем юридическую информацию о наших организациях
    public function getInfoLegal(Request $request) {

//        if ($request->isMethod('post')) {

//            $token = config('app.global_param')['token']['college_legal'];

//            if ($request->input('token') == $token) {

                $id_org = 23;

                $type_data = 'founder';
//                $id_from_1c = $request->input('id_from_1c');

                try {
                    $model_director = new Director();
                    $model_director->id_org_virtual=$id_org;
//                    $model_director->id_from_1c_virtual=$id_from_1c;
                    $model=$model_director->getActualDirector();
                } catch (\Exception $e) {
                    return $e->getMessage();
                }

                if (!empty($id_org)) {
                    //Разделяем типы выдаваемых данных

                    try {
                        switch ($type_data) {
                            case 'director':
                                $model_common = $model->toArray();
                                break;
                            case 'element':
                                $model_common = $model->getLegalElement->toArray();
                                break;
                            case 'info':
                                $model_common = $model->getLegalInfo->toArray();
                                break;
                            case 'discipline':
                                $model_common = $model_director->getDiscipline->toArray();
                                break;
                            case 'institute':
                                $model_common = $model->getActualInstitute->toArray();
                                break;
                            case 'founder':
                                $model_common = $model->getFounders->toArray();
                                break;
                            default:
                                $model_common = [];
                                break;
                        }//Разделяем типы выдаваемых данных
                        echo '<pre>';
                        return var_dump($model_common[0]);
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                }
//            }
//        }

        return 'Ошибка авторизации 1';

    }


//    public function show($id=NULL)
//    {
//
//
//        $model= Feedback::orderby('id','desc')->paginate(1);
////            ->get();
//
////        dd($model);
//        return view('/main/index',
//            [
//            'model' => $model
//        ]
//        );
//    }





//    public function index(Request $request)
//    {
//        $type_action=$request->type_action;
//        $name_table=$request->name_table;
//        return $type_action;
//        //В зависимости от параметра выполняем различные действия
//        switch ($type_action):
//            case 'all':
//            default:
//                $model = DB::table($name_table)->get();
//                break;
//
//        endswitch;
//
//
//
//        return json_encode($model);
//    }



//    public function index($type_action='all', $name_table='users') {
//
////В зависимости от параметра выполняем различные действия
//        switch ($type_action):
//            case 'all':
//            default:
//            $model = DB::table($name_table)->get();
//            break;
//
//        endswitch;
//
//
//
//        return json_encode($model);
//    }
}
