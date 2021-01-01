<?php namespace App\Controllers;

class Import extends BaseController
{
	public function index()
	{
		return view('form_import');
	}


    public function upload()
	{
        $validation = \Config\Services::validation();
        
        $valid = $this->validate(
            [
                'fileimport' => [
                    'label' => 'Input File',
                    'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
                    'errors' => [
                        'uploaded' => '{field} : You Need to select an Exel File',
                        'ext_in' => '{field} : File should be xls or xlsx '
                    ]
                ]
            ]
        );

        if(!$valid){
           
            
            $this->session->setFlashdata('dta', $validation->getError('fileimport'));

            return redirect()->to('/import/index');
        }else{
            $file_exel = $this->request->getFile('fileimport');

            $ext = $file_exel->getClientExtension();

            if($ext == 'xls'){
                $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            }else{
                $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); 
            }

            $spreadsheet = $render->load($file_exel);

            $data = $spreadsheet->getActiveSheet()->toArray();

            foreach($data as $x => $row){
                if($x == 0){
                    continue;
                }

                $name = $row[0];
                $email = $row[1];
                $contact = $row[2];

               // echo "$name<br>";
               $db = \Config\Database::connect();

               $user_data = [
                   'name' => $name,
                   'email' => $email,
                   'contact' => $contact
               ];
               $db->table('user')->insert($user_data);
               
            }
           
               $this->session->setFlashdata('success', 'Data Added to Database Successfully...');

               return redirect()->to('/import/index');
               
        }

    }

   

}
