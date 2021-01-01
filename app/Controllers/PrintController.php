<?php namespace App\Controllers;
use App\Models\PrintModel;

class PrintController extends BaseController
{
  public function __construct()
	{
    $this->model = new PrintModel();
    //	$model  = new PrintModel();
  }

	public function index()
	{
	    
      //  $post  = $model->findAll();

      //d($this->request->getVar('keyword'));
      $keyword = $this->request->getVar('keyword');
      if($keyword){
        $model1 = $this->model->search($keyword);
      }else{
        $model1 = $this->model; 
      }
      
            $data = [
              'post' => $model1->paginate(4, 'pg'),
              'pager' => $this->model->pager
            ];
                
		// 	echo '<pre>';
		// 	print_r($post);
		//    echo '<pre>';   
       


		return view('print_view', $data);
	}

	public function edit($id)
	{
        $model  = new PrintModel();
        $post  = $model->find($id);

        $data['post'] = $post;

        if($this->request->getMethod() == 'post'){
            $model = new PrintModel();  
            $_POST['id'] = $id;                   
            $model->save($_POST);
            $post  = $model->find($id); 
          }
          
        $data['post'] = $post;

		return view('edit_view', $data);
	}
}
