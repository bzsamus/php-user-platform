<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct(){

        parent::__construct();

                //load the library
                $this->load->helper('url');
    }

    public function profile(){
        $ext = end(explode('.', $_FILES['fileToUpload']['name']));
        $newname = date("d-m-y-Gis").substr(base64_encode($_FILES['fileToUpload']['name']),0,10).".".$ext;
        /* Create the config for upload library */ 
        $config['upload_path'] = './upload/';
        $config['file_name'] = $newname;
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';  
        $config['max_size']  = '0';  
        $config['max_width']  = '0';  
        $config['max_height']  = '0';  
        /* Load the upload library */  
        $this->load->library('upload', $config);

        /* Handle the file upload */  
        if ( ! $this->upload->do_upload('fileToUpload')){
          $error = array('error' => strip_tags($this->upload->display_errors()));
          echo json_encode($error);
        } 
        else{
          $data = array('upload_data' => $this->upload->data());
          $resize = array(
                'image_library'=>'gd2',
                'source_image'=>$data['upload_data']['full_path'],
                'create_thumb' => FALSE,
                'maintain_ratio'=>TRUE,
                'width'=>180,
                'height'=>250 
          );
          $this->load->library('image_lib',$resize);
          if(!$this->image_lib->resize()){
            //echo $this->image_lib->display_errors();
          }

          $tmp = array('filename'=>$data['upload_data']['file_name'],'width'=>$data['upload_data']['image_width'],'height'=>$data['upload_data']['image_height']);
          echo json_encode($tmp);
        }
    }

    public function photo(){
      $uid = intval($_POST['uid']);
      $description = addslashes($_POST['description']);
      $ext = end(explode('.', $_FILES['fileToUpload']['name']));
      $perm = intval($_POST['perm']);
      $long = floatval($_POST['longtitude']);
      $lat = floatval($_POST['latitude']);
      if($uid){
        $newname = date("d-m-y-Gis").substr(base64_encode($_FILES['fileToUpload']['name']),0,10).".".$ext;
        /* Create the config for upload library */
          $config['upload_path'] = './upload/photo/';
          $config['file_name'] = $newname;
          $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
          $config['max_size']  = '0';
          $config['max_width']  = '0';
          $config['max_height']  = '0';
          /* Load the upload library */
          $this->load->library('upload', $config);

          /* Handle the file upload */
          if ( ! $this->upload->do_upload('fileToUpload')){
            $error = array('error' => strip_tags($this->upload->display_errors()));
            echo json_encode($error);
          }
      }
    }
}
