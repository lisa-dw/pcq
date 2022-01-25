<?php

namespace App\Http\Controllers\Api\v1\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\Client\ClientListResource;
use App\Http\Resources\Client\ClientResource;
use App\Models\Client\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = [
            'content' => '22',
            'title' => '11',
        ];

        return ClientListResource::collection($outs);   // 복수


        return new ClientResource($outs); // 단수
        //return json_encode($outs);
        // return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);  // 에러발생
        // response()를 json($outs)에 담고,
        // Response:: HTTP_OK => 코드는 200   /  SON_PRETTY_PRINT : 코드는 이쁘게 해라
        // 이렇게 하면 좀 더 이쁘게 200코드로 온다고 하는데 200코드가 무슨 말인지 모르겠..

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // 저장, 생성 => create   / 만들면서 새로운 id를 부여받아서 새로운 클라이언트가 만들어진다.
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)    // 항목. => select _ where _ (찾는데 조건이 붙는) / 요청에 몇 번 id를 요청할 것인가를 반드시 기재해야 함. (단수)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
