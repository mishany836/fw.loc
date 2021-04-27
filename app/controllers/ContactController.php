<?php

namespace app\controllers;

use app\models\Contact;
use fw\core\base\View;

class ContactController extends AppController
{
    public $layout = 'contact';

    public function indexAction()
    {
            if (!empty($_POST)){
                $user = new Contact();
                $data = $_POST;
                $user->Load($data);
                if (!$user->validate($data)) {
                    $user->getErrors();
//                    $_SESSION['form_data'] = $data;
                    redirect();
                }
                if ($user->save('user')){
                    $_SESSION['success'] = 'ваши пожелания отправлены удачно!!!';
                }else{
                    $_SESSION['error'] = 'ваше письмо увы не дошло';
                }
                    redirect();
            }

    }

}







































