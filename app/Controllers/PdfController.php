<?php namespace App\Controllers;
use App\Models\PrintModel;

class PdfController extends BaseController
{
	public function index()
	{
       
        $model  = new PrintModel();
        $post  = $model->findAll();
      
        $data['post'] = $post;

        return view('pdf_view', $data);
                       
		
	}

	
    
    public function download()
	{
        
        $dompdf = new \Dompdf\Dompdf();
        $model  = new PrintModel();
        $post  = $model->findAll();

        
    //     echo '<pre>';
    //     print_r($post);
    //    echo '<pre>'; 

       $output = "<html><body>";
      
      foreach($post as $p){
        $output.=$p['name'];
        $output.="<br><br>";
        $output.=$p['email'];
        $output.="<br><br>";
        $output.=$p['contact'];
        $output.="<br><br>";
        $output.=$p['description'];
        $output.="<br><br><br>";
       }
        
       $output.="</body></html>";
       echo $output;

   

       $dompdf->loadHtml($output);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        ob_end_clean();
        $dompdf->stream("users.pdf");
       
	}

	

}
