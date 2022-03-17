<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::with('phoneRelation')->with('loveRelation')->get();
        return view('student.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 確認資料送過來
        // 存入資料
        // 商業邏輯
        // 回去首頁
        $input=$request->all();
        $input=$request->except('_token');
        
        // 存入學生資料
        $data=new Student;
        $data->name =$input['name'];
        $data->chinese =$input['chinese'];
        $data->english =$input['english'];
        $data->math =$input['math'];
        $data->love =$input['love'];
        $data->save();
        $student_id=$data->id;

        // 存入電話
        $data=new Phone;
        $dataPhone->name =$input['phone'];
        $dataPhone->student_id =$student_id;
        $dataPhone->save();

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::where('id',$id)->with('phoneRelation')->first();
        return view('student.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test(){
        echo "test";
    }
}
