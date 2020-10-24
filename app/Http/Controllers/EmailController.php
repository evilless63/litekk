<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Email::latest('updated_at')->get();
        return view('admin.emails.index')->with(['emails' => $emails]);
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
        if ($request->direction == 1) { //Обратный звонок
            $request->validate([
                'phone' => 'required|phone',
                // 'captcha' => 'required|captcha'
            ]);
        } else { // Все остальное
            $request->validate([
                'email' => 'required|email',
                'name' => 'required',
                'message' => 'required',
                'policy' => 'required',
                // 'captcha' => 'required|captcha'
            ]);
        }

        try {

            $email = new Email();
            $_IMAGE = $request->file('filepath');
            $data = $request->all();
            $data['filepath'] = "";
            if($_IMAGE !== null) {
                if ($_IMAGE->getError() == 1) {
                    $max_size = $_IMAGE->getMaxFileSize() / 2048 / 2048; // Get size in 2Mb
                    $error = 'Размер документа должен быть меньше ' . $max_size . 'Mb. Отправка письма завершилась неудачно.';
                    return response()->json(array('msg' => $error), 500);
                }
    
                $filename = $this->regexpImages(str_replace('"', '', time() . $_IMAGE->getClientOriginalName()));
                $uploadPath = 'images/emails/';
                $_IMAGE->move($uploadPath, str_replace('"', '', $filename));      
                $data['filepath'] = $filename;         
            }           

            if ($request->direction == 1) //Обратный звонок
            {
                $data['title'] = "Обратный звонок";
                $data['name'] = "Обратный звонок";
                $data['message'] = "Заказ обратного звонка с сайта";
            } elseif ($request->direction == 2) // Письмо директору
            {
                $data['title'] = "Письмо директору";
            } elseif ($request->direction == 3) //Письмо с контактов
            {
                $data['title'] = "Письмо с контактов";
            } elseif ($request->direction == 4) //Письмо с контактов
            {
                $data['title'] = "Письмо со страницы товара: " + $data['product'];
            } 
            
            if ($request->direction == 1) //Обратный звонок
            {
                $to_email = 'call@litekk.ru';
                Mail::to($to_email)->send(new \App\Mail\SendEmail($data));
            } else // Все остальное
            {
                $to_email = 'info@litekk.ru';
                Mail::to($to_email)->send(new \App\Mail\SendEmail($data));
            }

            $emailCreated = $email->create($data);

            $msg = "Письмо успешно отправлено";
            return response()->json(array('msg' => $msg), 200);

        } catch (Exception $e) {
            $msg = "При отправке письма возникли проблемы";
            return response()->json(array('msg' => $msg), 500);
        }
    }

    /**s
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        return view('admin.emails.show')->with(['email' => $email]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
