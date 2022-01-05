<?php
// app/controllers/Pages.php
class Pages extends Controller {    
    public function index(){
        $data = [
            'title' => 'PHP Simple API',
            'subtitle' => 'UK Police API consumption'
        ];
        $this->view('pages/index', $data);
    }
}