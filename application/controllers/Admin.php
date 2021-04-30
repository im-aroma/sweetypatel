<?php
class Admin extends CI_Controller
{


    public function __construct()
    {
       parent::__construct();
       $this->load->model('admin_model');
       $this->load->model('Meta_model');
       $this->load->model('Videos_model');
       $this->load->model('Location_model');
       $this->load->model('Prof_model');
       $this->load->model('Slider_model');
       $this->load->model('Category_model');
       $this->load->model('States_model');
       $this->load->model('Pro_type_model');
       $this->load->model('Videos_model');
       $this->load->model('Blog_model');
       $this->load->model('Pages_model');
       $this->load->model('Reviews_model');
       $this->load->model('Service_model');
    }
    public function index()
    {
        
        $this->load->view('admin/view_login.php');
    }
    public function dashboard()

    {
        $this->check_login();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_dashboard');

        $this->load->view('admin/includes/footer');
    }

    //login
    public function login_admin()
    {
        
        if (!empty($this->input->post('submit'))) {
            $name = $this->input->post('uname');
            $pwd = $this->input->post('pwd');
            
            $var = $this->admin_model->check_username_pwd($name, $pwd);
            
            if ($var == true) {
                $this->session->set_userdata('username', $name);
                redirect(base_url() . 'admin/dashboard');
            } else {
                $this->session->set_flashdata('err_msg','Invalid Username or Password');
                redirect(base_url() . 'admin');
            }
        } 
    }

    //logout
    public function signout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url() . "admin");
    }

    //meta start
    public function meta()
    {
        
        $this->check_login();
        $metadata['res'] = $this->Meta_model->meta_list();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_meta_list', $metadata);

        $this->load->view('admin/includes/footer');
    }

    public function add_meta()
    {
        $this->check_login();
        $data['get_pages'] = $this->Meta_model->get_page();

        if (!empty($this->input->post('submit'))) {
          
            //print_r($this->input->post());

            extract($this->input->post());

            $data = array(
                'page_id' => $pg_id,
                'title_id' => $title_id,
                'meta_title' => $meta_title,
                'meta_des' => $meta_des,
                'added_date' => date('Y-m-d H:i:s')
            );

            $res = $this->Meta_model->meta_add($data);

            if ($res == true) {
                $this->session->set_flashdata('msg', 'Meta Added Successfully');
                redirect(base_url() . 'admin/meta');
            }
        }

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_meta', $data);
        $this->load->view('admin/includes/footer');
    }

   

    public function edit_meta($edit_id)
    {
        $this->check_login();
        $data['res'] = $this->Meta_model->get_meta_list($edit_id);
        $data['get_pages'] = $this->Meta_model->get_page();
        $data['loc'] = $this->Meta_model->get_location();
        $data['profile'] = $this->Meta_model->get_profile();
        $data['category'] = $this->Meta_model->get_category_list();
        $data['videos']  = $this->Meta_model->get_video_list();
        $data['blog']    = $this->Meta_model->get_blog();
       

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_meta_edit', $data);
        $this->load->view('admin/includes/footer');
    }

    public function meta_update()
    {
        $this->check_login(); 
        if (!empty($_POST['submit'])) {
            extract($this->input->post());
            //print_r($this->input->post());
            if (!empty($title_id)) {
                $tit_id = $title_id;
            } else {
                $tit_id = "";
            }
            $data = array(
                'page_id' => $pg_id,
                'title_id' => $tit_id,
                'meta_title' => $meta_title,
                'meta_des' => $meta_des,
                'updated_date' => date('Y-m-d H:i:s')
            );
            
            $res = $this->Meta_model->meta_update($data, $upd_id);

            if ($res == true) {
                $this->session->set_flashdata('msg', 'Meta Updated Succesfully');
                redirect(base_url() . 'admin/meta');
            }
        }
    }

  
    public function del_meta($delid)
    {

        $this->check_login();
        $res = $this->Meta_model->meta_del($delid);

        if ($res == true) {
            $this->session->set_flashdata('msg', 'Meta Deleted Successfully');
            redirect(base_url() . 'admin/meta');
        }
    }
    

public function ajax_loc()
  {
      $res = $this->Meta_model->get_location();

      $msg = "<label for='last name' id='label_title'><b>Location Title:</b></label>
    <select name='title_id' id='title_id' class='form-control'>
      <option value=''>--Select Title--</option>";
      
            foreach($res as $val)
            { 
      
      $msg .="<option value=".$val['id'].">".$val['loc_title']."</option>";
            }
    $msg .="</select>
    <br/>";
       echo $msg;
  }

   public function ajax_profile()
  {

     $res = $this->Meta_model->get_profile();

     $msg = "<label for='last name' id='label_title'><b>Profile Title:</b></label>
    <select name='title_id' id='title_id' class='form-control'>
      <option value=''>--Select Title--</option>";
      foreach($res as $val)
      {

    $msg .="<option value=".$val['id'].">".$val['title']."</option>";
     }
    $msg .="</select>
    <br/>";
       echo $msg;     
  }

  public function ajax_catgeory()
  {
     $res = $this->Meta_model->get_category_list();

     $msg = "<label for='last name' id='label_title'><b>Category Title:</b></label>
      <select name='title_id' id='title_id' class='form-control'>
      <option value=''>--Select Title--</option>";

      foreach($res as $val)
      {
        $msg .="<option value=".$val['id'].">".$val['cat_title']."</option>";
      }
      
      $msg .="</select>
               <br/>";

      echo $msg;            
  }

  public function ajax_video()
  {
      $res = $this->Meta_model->get_video_list();

      
      $msg = "<label for='last name' id='label_title'><b>Video Title:</b></label>
      <select name='title_id' id='title_id' class='form-control'>
      <option value=''>--Select Title--</option>";

      foreach($res as $val)
      {
         $msg .="<option value=".$val['video_id'].">".$val['video_title']."</option>";
      }

      $msg .="</select>
              <br/>";
      echo $msg;      

  }


  public function ajax_blog()
  {
       $res = $this->Meta_model->get_blog();


       $msg = "<label for='last name' id='label_title'><b>Blog Title:</b></label>
      <select name='title_id' id='title_id' class='form-control'>
      <option value=''>--Select Title--</option>";

      foreach($res as $val)
      {
         $msg .="<option value=".$val['id'].">".$val['blog_title']."</option>";  
      }

      $msg .="</select><br/>";

      echo $msg;
  }



    //meta end

    //location start
    public function location()
    {
        
        $this->check_login();
        $locdata['res'] = $this->Location_model->get_loc_list();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_loc_list', $locdata);

        $this->load->view('admin/includes/footer');
    }

    public function add_location()
    {
      $this->check_login();      
      if(!empty($this->input->post('submit')))
      {
            
          extract($this->input->post());
          $config['upload_path'] = 'uploads/location';
          $config['allowed_types'] = 'jpg|gif|jpeg';
        //   $config['encrypt_name']  = TRUE; 

          
          $this->upload->initialize($config);


         // print_r($_FILES); die;

          

              if(! $this->upload->do_upload('loc_img'))
              {
                  
              }
              else
              {
                  
                  $loc_imge = $this->upload->data('file_name');
                  $data = array(
                              'loc_title'=>$title,
                              'sub_loc_title'=>$sub_loc_title,
                              'loc_des'=>$des,
                              'loc_img'=>$loc_imge,
                              'img_alt_title'=>$alt_title,
                              'posted_date'=>date('Y-m-d H:i:s')   
                              );
              }  

          
          
          $res = $this->Location_model->loc_ins($data);

          if($res==true)
          {
             $this->session->set_flashdata('msg','Location Added Sucessfully');
             redirect(base_url().'admin/location');
          }       
      } 
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_loc');
        $this->load->view('admin/includes/footer');
    }

  public function edit_location($id)
  {
       $this->check_login();
       $data['res'] = $this->Location_model->view_loc($id);

       $this->load->view('admin/includes/header');
       $this->load->view('admin/includes/sidebar');
       $this->load->view('admin/view_loc_edit',$data);
       $this->load->view('admin/includes/footer');
  }

  public function update_location()
  {
       $this->check_login();
       if(!empty($this->input->post('submit')))
       {
            //print_r($this->input->post());
           extract($this->input->post());

           $config['upload_path'] = 'uploads/location';
           $config['allowed_types'] = 'jpg|jpeg|gif';
        //    $config['encrypt_name']  = TRUE;

           
           $this->upload->initialize($config);


           if(! $this->upload->do_upload('loc_img'))
           {
                $data = array(
                             'loc_title'=>$title,
                             'sub_loc_title'=>$sub_loc_title,
                             'loc_des'=>$des,
                             'img_alt_title'=>$alt_title,
                             'updated_date'=>date('Y-m-d H:i:s')
                             );
           }else
           {

               
               $blo_img = $this->upload->data('file_name');

               $data = array(
                             'loc_title'=>$title,
                             'sub_loc_title'=>$sub_loc_title,
                             'loc_des'=>$des,
                             'loc_img'=>$blo_img,
                             'img_alt_title'=>$alt_title,
                             'updated_date'=>date('Y-m-d H:i:s')
                             );

           }

           $res = $this->Location_model->upd_loc($data,$upd_id);

           if($res==true)
           {
              $this->session->set_flashdata('msg','Location Updated Successfully');
              redirect(base_url().'admin/location');
           }
       }
  }
    public function del_location($id)
    {
        $this->check_login(); 
        $res = $this->Location_model->del_loc($id);

        if ($res == true) {
            $this->session->set_flashdata('msg', 'Location Deleted Successfully');
            redirect(base_url() . 'admin/location');
        }
    }
    

     
    //location end
    //profile start
    public function profile()
    {
        
        $this->check_login(); 
        $profdata['res'] = $this->Prof_model->posts_list();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_prof_list', $profdata);

        $this->load->view('admin/includes/footer');
    }
  
    public function add_profile()
    {
        $this->check_login();
        $data['get_category'] = $this->Category_model->cat_list();

        $data['get_location'] = $this->Location_model->get_loc_title();

        $data['get_states']   = $this->States_model->get_state_list();

        $data['get_pro_types'] = $this->Pro_type_model->get_pro_type_list();

        $data['get_services']  = $this->Service_model->view_service();

        if (!empty($this->input->post('submit')))
        {
        
          if(!empty($_FILES['pht']['name'][0]))
          {
                
                $res = $this->upload_profile($_FILES['pht']); 
                
                $pht = implode(",",$res); 



                //echo $pht; die;
                
                extract($this->input->post());

                $cate_list = implode(',',$cate);

                $loc_list = implode(',',$loc);

                $service_list = implode(',',$services);

                $data = array(
                          'title'=>$title,
                          'imge'=>$pht,
                          'description'=>$des,
                          'alt_title'=>$alt_title,
                          'ethencity'=>$ethencity,
                          'sexuality'=>$sexuality,
                          'gender'=>$gender,
                          'body'=>$body,
                          'dress_size'=>$dres_size,
                          'bust_size'=>$bust_size,
                          'drinking'=>$drink,
                          'smoking'=>$smok,
                          'whatsapp_num'=>$whatspp_number,
                          'url'=>$url,
                          'age'=>$age,
                          'height'=>$ht,
                          'avbl_cat'=>$cate_list,
                          'avbl_loc'=>$loc_list,
                          'avbl_st'=>$avl_st,
                          'profile_type'=>$pro_type,
                          'service'=>$service_list,
                          'language'=>$lang,
                          'origin'=>$origin,
                          'availability'=>$avbl,
                          'abt_profile'=>$abt_pro,
                          'created_at'=>date('Y-m-d H:i:s')
                          );

                $res_id = $this->Prof_model->post_add($data);
                $data_slider_img = array(
                                       'pro_id'=>$res_id,
                                       'profile_title'=>$title,
                                       'gal_img'=>$res[0],
                                       'status'=>0,
                                       'created_at'=>date('Y-m-d H:i:s')
                                       );

                $this->Prof_model->gal_add($data_slider_img);  
                if(!empty($res_id))
                {
                     $this->session->set_flashdata('msg','Post Added Successfully');
                     redirect(base_url()."admin/profile");
                }
            }
         }
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_prof',$data);
        $this->load->view('admin/includes/footer');
        } 

        public function edit_profile($edit_id)
        {
              $this->check_login();
              $data['get_category'] = $this->Category_model->get_cat_list();  
              $data['get_location'] = $this->Location_model->get_loc_title();   
              $data['get_states']   = $this->States_model->get_state_list();
              $data['get_pro_types'] = $this->Pro_type_model->get_pro_type_list();
              $data['get_services']  = $this->Service_model->view_service();

              $data['res']=$this->Prof_model->get_post_list($edit_id);

              $this->load->view('admin/includes/header');
              $this->load->view('admin/includes/sidebar');
              $this->load->view('admin/view_prof_edit',$data);
              $this->load->view('admin/includes/footer');
        }

       public function update_profile()
       {
          $this->check_login();         
          if(!empty($_POST['update']))
          {
              extract($this->input->post());
              
            // echo '<pre>'; print_r($this->input->post());die;
              
              $cate_list = implode(',',$cate);

              $loc_list  = implode(',',$loc);

              $service_list = implode(',',$services);


              if(!empty($_FILES['pht']['name'][0]))
              {
                 //print_r($_FILES); 
                 $res = $this->upload_profile($_FILES['pht']);

                 $pht = implode(',',$res);
            
                

                 $data = array(
                          'title'=>$title,
                          'imge'=>$pht,
                          'description'=>$des,
                          'alt_title'=>$alt_title,
                          'ethencity'=>$ethencity,
                          'sexuality'=>$sexuality,
                          'gender'=>$gender,
                          'body'=>$body,
                          'dress_size'=>$dres_size,
                          'bust_size'=>$bust_size,
                          'drinking'=>$drink,
                          'smoking'=>$smok,
                          'whatsapp_num'=>$whatspp_number,
                          'url'=>$url,
                          'age'=>$age,
                          'height'=>$ht,
                          'avbl_cat'=>$cate_list,
                          'avbl_loc'=>$loc_list,
                          'avbl_st'=>$avl_st,
                          'profile_type'=>$pro_type,
                          'service'=>$service_list,
                          'language'=>$lang,
                          'origin'=>$origin,
                          'availability'=>$avbl,
                          'abt_profile'=>$abt_pro,
                          'updated_at'=>date('Y-m-d H:i:s')
                          );

                       
                
            
          }else
          {
            $data = array(
                'title'=>$title,
                'description'=>$des,
                'alt_title'=>$alt_title,
                'ethencity'=>$ethencity,
                'sexuality'=>$sexuality,
                'gender'=>$gender,
                'body'=>$body,
                'dress_size'=>$dres_size,
                'bust_size'=>$bust_size,
                'drinking'=>$drink,
                'smoking'=>$smok,
                'whatsapp_num'=>$whatspp_number,
                'url'=>$url,
                'age'=>$age,
                'height'=>$ht,
                'avbl_cat'=>$cate_list,
                'avbl_loc'=>$loc_list,
                'avbl_st'=>$avl_st,
                'profile_type'=>$pro_type,
                'service'=>$service_list,
                'language'=>$lang,
                'origin'=>$origin,
                'availability'=>$avbl,
                'abt_profile'=>$abt_pro,
                'updated_at'=>date('Y-m-d H:i:s')
                );
          }


                 
         $result = $this->Prof_model->post_update($data,$upd_id);
		 if(!empty($data_slider_img))
		 {
         $this->Prof_model->gal_upd($data_slider_img,$upd_id);
		 }

         if($result == true)
         {
             $this->session->set_flashdata('msg','Post Updated Successfully');
             redirect(base_url().'admin/profile');
         }  

         
      }
  }

    public function del_profile($del_id)
    {

        $this->check_login();
        $res = $this->Prof_model->post_del($del_id);

        if ($res == true) {
            $this->session->set_flashdata('msg', 'Profile Deleted Successfully');
            redirect(base_url() . 'admin/profile');
        }
    }
    private function upload_profile($files)
    {
        $config['upload_path']   = 'uploads/profile';
        $config['allowed_types'] = 'jpg|gif|png|jpeg';
        // $config['encrypt_name']  = TRUE;


        //echo '<pre>';print_r($files); die;
        

        $images = array();
        
        foreach ($files['name'] as $key => $image) {
            $_FILES['pht[]']['name'] = $files['name'][$key];
            $_FILES['pht[]']['type'] = $files['type'][$key];
            $_FILES['pht[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['pht[]']['error'] = $files['error'][$key];
            $_FILES['pht[]']['size'] = $files['size'][$key];


            $this->upload->initialize($config);

            if ($this->upload->do_upload('pht[]')) {
                // print_r($this->upload->data());
                $images[] = $this->upload->data('file_name');
                //$this->watermark($this->upload->data('file_name'));
            } else {
                // echo $this->upload->display_errors();
                return false;
            }
        }
        // echo '<pre>';print_r($images); die;
        return $images;
    }

  //    public function watermark($file_name)
  // {
  //       //echo $file_name; die;
        
  //       $config['image_library'] = 'gd2';
  //       $config['source_image'] = 'uploads/profile/'.$file_name;

  //       $config['wm_type']       = 'overlay';    
                        
  //       $config['wm_overlay_path'] = 'assets/images/admin/watermark.png';

  //       $config['width'] = '20';
  //       $config['height'] = '20';
  //       $config['wm_padding'] = '50';
       
  //       $config['wm_vrt_alignment'] = 'bottom';
  //       $config['wm_hor_alignment'] = 'center';
  //       $config['wm_vrt_offset'] = '100';
  //      // print_r($config); die;
  //      $this->load->library('image_lib');
  //       $this->image_lib->initialize($config);
  //       /*if (!$this->image_lib->watermark()) {
  //           echo $this->image_lib->display_errors(); 
  //       }*/ 
  //       $this->image_lib->watermark();
  //   }
    //profile end

    // Slider Profile Image Gallery //

    public function slide_img()
    {
        $this->check_login();
        $data['res'] = $this->Slider_model->get_images();

        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_gall_list',$data);

        $this->load->view('admin/includes/footer');
    }


    public function upd_gal()
    {
        $this->check_login();
        extract($this->input->post());

        $res = $this->Slider_model->upd_img_act($prof_id);

        if($res == true)
        {
           $this->session->set_flashdata('msg','Slider Images Activated Successfully');
           redirect(base_url().'Admin/slide_img');
        }

        
    }

    // Slider Profile Image Gallery End //

    //category start
    public function category()
    {
        
        $this->check_login();
        $catdata['res'] = $this->Category_model->cat_list();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_cat_list', $catdata);

        $this->load->view('admin/includes/footer');
    }

    public function add_category()
    {
        $this->check_login();
        if(!empty($_POST['submit']))
        {
            //print_r($_FILES); die;
           extract($this->input->post());

           if(!empty($_FILES['cat_img']['name']))
           {    

           $config['upload_path']   = 'uploads/category';
           $config['allowed_types'] = 'jpg|jpeg|gif';
        //    $config['encrypt_name']  = TRUE;

           
           $this->upload->initialize($config);



           if(! $this->upload->do_upload('cat_img'))
           {

           }else
           {
                 $ct_img = $this->upload->data('file_name');
           }
           }

            
                   
                 $data = array(
                       'cat_title'=>$title,
                       'sub_cat_title'=>$sub_cat_title,
                       'cat_des'=>$cat_des,
                       'cat_img'=>$ct_img,
                       'cat_alt_title'=>$cat_alt_title,
                       'added_date'=>date('Y-m-d H:i:s')    
                        );  
                
                 $res = $this->Category_model->cat_add($data);

                 if($res == true)
                 {
                    $this->session->set_flashdata('msg','Category added successfully');
                    redirect(base_url().'admin/category');
                 }
          
           
        }
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_cat');
        $this->load->view('admin/includes/footer');
    }

    public function edit_category($edit_id)
    {
        $this->check_login(); 
        $data['res']=$this->Category_model->cat_edit($edit_id);

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_cat_edit', $data);
        $this->load->view('admin/includes/footer');
    }

    public function update_category()
    {
        //
        $this->check_login();
        if(!empty($this->input->post('submit')))
        {
               //print_r($_FILES);die;
             extract($this->input->post());

             if(!empty($_FILES['cat_img']['name']))
             {  
             $config['upload_path']  = 'uploads/category';
             $config['allowed_types'] = 'jpg|jpeg|gif';
            //  $config['encrypt_name']  = TRUE;

             
             $this->upload->initialize($config);

             if(! $this->upload->do_upload('cat_img'))
             {
                   
             }else
             {
                $ct_img = $this->upload->data('file_name');

             }

             }


            
               //echo $ct_img; die;
                if((!empty($_FILES['cat_img']['name'])))
                {   
                   $data = array(
                       'cat_title'=>$title,
                       'sub_cat_title'=>$sub_cat_title,
                       'cat_des'=>$cat_des,
                       'cat_img'=>$ct_img,
                       'cat_alt_title'=>$cat_alt_title,
                       'updated_date'=>date('Y-m-d H:i:s')    
                        );
                }else
                {
                    $data = array(
                       'cat_title'=>$title,
                       'sub_cat_title'=>$sub_cat_title,
                       'cat_des'=>$cat_des,
                       'cat_alt_title'=>$cat_alt_title,
                       'updated_date'=>date('Y-m-d H:i:s')    
                        );
                }           
                    
             
             $res = $this->Category_model->cat_upd($data,$upd_id);
             if($res==true)
             {
                $this->session->set_flashdata('msg','Category Updated Succesfully');
                redirect(base_url().'admin/category');
             }
        }
    }

    public function del_category($del_id)
    {

        $this->check_login();
        $res = $this->Category_model->cat_del($del_id);

        if ($res == true) {
            $this->session->set_flashdata('msg', 'Category Deleted Successfully');
            redirect(base_url() . 'admin/category');
        }
    }

    
    //category end

    /*Videos Start*/

    public function Videos()
    {

       
       $this->check_login();
       $data['res'] = $this->Videos_model->get_video_list();

       $this->load->view('admin/includes/header');

       $this->load->view('admin/includes/sidebar');

       $this->load->view('admin/view_video_list',$data);

       $this->load->view('admin/includes/footer');
    }


    public function add_video()
    {
        $this->check_login();
        if(!empty($this->input->post('submit')))
        {
            //print_r($this->input->post());die;

            extract($this->input->post());

            $config['upload_path'] = 'uploads/video_images';
            $config['allowed_types'] = 'jpg|jpeg|png';
            // $config['encrypt_name']  = TRUE;

            $this->upload->initialize($config);


            if(! $this->upload->do_upload('vid_imge'))
            {
                 //echo $this->upload->display_errors();
            }else
            {
                $video_images = $this->upload->data('file_name');

                $data = array(
                             'video_title'=>$vid_title,
                             'sub_video_title'=>$sub_vid_title,
                             'video_alt_title'=>$vid_alt_title,
                             'video_imge'=>$video_images,
                             'video_link'=>$vid_link,
                             'created_at'=>date('Y-m-d H:i:s')
                             );


            }

            $res = $this->Videos_model->video_ins($data);

            if($res == true)
            {
               $this->session->set_flashdata('msg','Video Link added Successfully');
               redirect(base_url().'admin/videos');
            }


        }

        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_add_video');

        $this->load->view('admin/includes/footer');
    }

    public function edit_video($id)
    {

        // print_r($this->input->post());
        
         $this->check_login();

         $data['res'] = $this->Videos_model->view_videos($id);

         $this->load->view('admin/includes/header');

         $this->load->view('admin/includes/sidebar');

         $this->load->view('admin/view_edit_video',$data);

         $this->load->view('admin/includes/footer');
    }


    public function update_video()
    {
         
         $this->check_login();

         if(!empty($this->input->post('submit')))
         {
             extract($this->input->post());
             
             $config['upload_path'] = 'uploads/video_images';
             $config['allowed_types'] = 'jpg|jpeg|png';
            //  $config['encrypt_name']  = TRUE;

             $this->upload->initialize($config);


             if(! $this->upload->do_upload('vid_imge'))
             {
                  $data=array(
                        'video_title'=>$vid_title,
                        'sub_video_title'=>$sub_vid_title,
                        'video_alt_title'=>$vid_alt_title,
                        'video_link'=>$vid_link,
                        'updated_at'=>date('Y-m-d H:i:s')
                        );
             }
             else
             {
                $video_img = $this->upload->data('file_name');

                $data=array(
                        'video_title'=>$vid_title,
                        'sub_video_title'=>$sub_vid_title,
                        'video_alt_title'=>$vid_alt_title,
                        'video_link'=>$vid_link,
                        'video_imge'=>$video_img,
                        'updated_at'=>date('Y-m-d H:i:s')
                        );
             }


             $res = $this->Videos_model->upd_videos($data,$upd_id); 

             if($res == true)
             {
                  $this->session->set_flashdata('msg','Video Link Updated Successfully');
                  redirect(base_url().'Admin/Videos');
             }



             
         }
    }


    public function del_video($del_id)
    {
         $this->check_login();
         $res = $this->Videos_model->del_videos($del_id);

         if($res == true)
         {
             $this->session->set_flashdata('msg','Delete Video Succesfully');
             redirect(base_url().'Admin/Videos');
         }


    }
    /*Videos End*/

    //pages start
    public function pages()
    {
        
        $this->check_login();
        $pagedata['res'] = $this->Pages_model->pages_list();
        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_pages_list', $pagedata);

        $this->load->view('admin/includes/footer');
    }
    
   
    public function add_page()
    {
        $this->check_login();
        if (!empty($this->input->post('submit'))) {
            //print_r($this->input->post());
            extract($this->input->post());
            $data = array(
                'title' => $title,
                'page_url' => $url,
                'added_date' => date('Y-m-d H:i:s')
            );
            
            $res = $this->Pages_model->page_add($data);
            if ($res == true) {
                $this->session->set_flashdata('msg', 'Page added Successfully');
                redirect(base_url() . 'admin/pages');
            }
        }
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_page');
        $this->load->view('admin/includes/footer');
    }
  public function page_edit($edit_id)

  {

       
      $this->check_login();
      $data['res']=$this->Pages_model->get_page_list($edit_id);

      $this->load->view('admin/includes/header');

      $this->load->view('admin/includes/sidebar');

      $this->load->view('admin/view_page_edit',$data);

      $this->load->view('admin/includes/footer');

  }

  public function update_page()

  {
      $this->check_login(); 
      if(!empty($_POST['submit']))

      {

          extract($this->input->post());

          //print_r($this->input->post());



          $data = array(

                       'title'=>$title,

                       'page_url'=>$url,

                       'updated_date'=>date('Y-m-d H:i:s')

                       );

          

          $res = $this->Pages_model->page_update($data,$upd_id);



          if($res == true)

          {

              $this->session->set_flashdata('msg','Page Updated Succesfully');

              redirect(base_url().'admin/pages');

          }

         

      }

  }
    //pages end


  //States Start

  public function States()
  {
    $this->check_login(); 
    $data['res'] = $this->States_model->get_state_list(); 

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');
    $this->load->view('admin/view_states_list',$data);
    $this->load->view('admin/includes/footer');
  }


  public function add_states()
  {
    
     
     $this->check_login();
     if(!empty($this->input->post('submit')))
     {
         extract($this->input->post());

         $data = array(
                     'state_name'=>$st_name,
                     'created_at'=>date('Y-m-d H:i:s')
                     );

         $res = $this->States_model->state_ins($data);

         if($res == true)
         {
             $this->session->set_flashdata('msg','State Added Successfully');
             redirect(base_url().'admin/States');
         }
     }

     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_add_states');
     $this->load->view('admin/includes/footer');
  }


  public function edit_state($id)
  {
      $this->check_login();
      $data['result'] = $this->States_model->view_state($id);

      $this->load->view('admin/includes/header');
      $this->load->view('admin/includes/sidebar');
      $this->load->view('admin/view_edit_states',$data);
      $this->load->view('admin/includes/footer');
  }


  public function upd_states()
  {
     $this->check_login();
     if(!empty($this->input->post('submit')))
     {
         extract($this->input->post());

         $data = array(
                     'state_name'=>$st_name,
                     'updated_at'=>date('Y-m-d H:i:s')
                     );

         $res = $this->States_model->upd_state($data,$upd_id);


         if($res == true)
         {
             $this->session->set_flashdata('msg','State Updated Successfully');
             redirect(base_url().'Admin/States');
         }
     }
  }


  public function del_state($del_id)
  {
      $this->check_login();
      $res = $this->States_model->del_state($del_id);

      if($res == true)
      {
           $this->session->set_flashdata('msg','State Deleted Successfully');
           redirect(base_url().'Admin/States');
      }
  }


  //State End


  //Profile Type Start


  public function pro_types()
  {
    $this->check_login(); 
    $data['res'] = $this->Pro_type_model->get_pro_type_list();

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');
    $this->load->view('admin/view_pro_type_list',$data);
    $this->load->view('admin/includes/footer');
  }


  public function add_pro_type()
  {
     $this->check_login(); 
     if(!empty($this->input->post('submit')))
     {
          extract($this->input->post());

          $data = array(
                     'pro_type'=>$pro_type,
                     'created_at'=>date('Y-m-d H:i:s')
                    );

          $res = $this->Pro_type_model->pro_type_ins($data);

          if($res == true)
          {
             $this->session->set_flashdata('msg','Profile Type added Successfully');
             redirect(base_url().'Admin/pro_types');
          }
     }

     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_add_pro_type');
     $this->load->view('admin/includes/footer');
  }


  public function edit_pro_type($edit_id)
  {
    $this->check_login();
    $data['res'] = $this->Pro_type_model->view_pro_type($edit_id);


    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');
    $this->load->view('admin/view_edit_pro_type',$data);
    $this->load->view('admin/includes/footer');
  }


  public function upd_pro_type()
  {
     $this->check_login(); 
     if(!empty($this->input->post('submit')))
     {
          extract($this->input->post());

          $data = array(
                     'pro_type'=>$pro_type,
                     'updated_at'=>date('Y-m-d H:i:s')
                     );

          $res = $this->Pro_type_model->upd_pro_type($data,$upd_id);

          if($res == true)
          {
             $this->session->set_flashdata('msg','Profile Type Updated Successfully');
             redirect(base_url().'Admin/pro_types');
          }

     }
  }


  public function del_pro_type($del_id)
  {
     $this->check_login(); 
     $res = $this->Pro_type_model->del_pro_type($del_id);

     if($res == true)
     {
         $this->session->set_flashdata('msg','Profile Type Deleted Successfully');
         redirect(base_url().'Admin/pro_types');
     }
  }


  //Profile Type Ends

  //Service Starts

    public function services()
    {
         $data['res'] = $this->Service_model->view_service();
          
         $this->load->view('admin/includes/header');
         $this->load->view('admin/includes/sidebar');
         $this->load->view('admin/view_services',$data);
         $this->load->vieW('admin/includes/footer');
    }


    public function add_service()
    {

        if(!empty($this->input->post('submit')))
        {
            extract($this->input->post());

            $data = array(
                      'service'=>$service_name,
                      'created_at'=>date('Y-m-d h:i:s'),
                      'updated_at'=>date('Y-m-d h:i:s')
            );

            $res = $this->Service_model->add_service($data);

            if($res == 'true')
            {
                 $this->session->set_flashdata('msg','Service added Successfully');
                 redirect(base_url().'admin/services');
            }
        }

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_service');
        $this->load->view('admin/includes/footer');
    }

    public function edit_service($edit_id)
    {
        $data['res'] = $this->Service_model->disp_service($edit_id);

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_edit_service',$data);
        $this->load->view('admin/includes/footer');
    }

    public function upd_service()
    {
        
        if(!empty($this->input->post('submit')))
        {
            extract($this->input->post()); 
            $data = array(
                       'service'=>$service_name,
                       'updated_at'=>date('Y-m-d H:i:s')
                    );

            $res = $this->Service_model->upd_service($data,$upd_id);
            
            if($res=='true')
            {
                 $this->session->set_flashdata('msg','Service Updated Successfully');
                 redirect(base_url().'admin/services');
            }

        }
    }

    public function del_service($del_id)
    {
        $res = $this->Service_model->delt_service($del_id);
        
        if($res == 'true')
        {
            $this->session->set_flashdata('msg','Service deleted successfully');
            redirect(base_url().'admin/services');
        }
    }

  //Service Ends

  //Blog Start
  
  public function blog()
  {
     $this->check_login(); 
     $data['res'] =  $this->Blog_model->get_blog_list(); 
      
     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_blog_list',$data);
     $this->load->view('admin/includes/footer');
  }


  public function add_blog()
  {
    $this->check_login();  
    if(!empty($this->input->post('submit')))
    {
        extract($this->input->post());

        $config['upload_path'] = 'uploads/blog';
        $config['allowed_types'] = 'jpg|jpeg|png';
        // $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);


        if(! $this->upload->do_upload('blo_img'))
        {

        }
        else 
        {
           $blo_img = $this->upload->data('file_name'); 
           $data = array(
                        'blog_title'=>$title,
                        'sub_blog_title'=>$sub_blog_title,
                        'blog_des'=>$cat_des,
                        'blog_img'=>$blo_img,
                        'img_alt_title'=>$blog_alt_title,
                        'posted_date'=>date('Y-m-d H:i:s')
                       );

        $res = $this->Blog_model->blog_ins($data);  

        if($res == true)
        {
             $this->session->set_flashdata('msg','Blog Added Successfully');
             redirect(base_url().'Admin/blog');
        }
        }

        
    }

    $this->load->view('admin/includes/header');
    $this->load->view('admin/includes/sidebar');
    $this->load->view('admin/view_add_blog');
    $this->load->view('admin/includes/footer');
  }


  public function edit_blog($id)
  {
     $this->check_login(); 
     $data['res'] = $this->Blog_model->view_blog($id);

     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_edit_blog',$data);
     $this->load->view('admin/includes/sidebar');  
     $this->load->view('admin/includes/footer');
  }


  public function upd_blog()
  {
    $this->check_login();  
    if(!empty($this->input->post('submit')))
    {
          extract($this->input->post());

          $config['upload_path'] = 'uploads/blog';
          $config['allowed_types'] = 'jpg|jpeg|png';
        //   $config['encrypt_name']  = TRUE;

          $this->upload->initialize($config);

          if(! $this->upload->do_upload('blo_img'))
          {
               $data = array(
                        'blog_title'=>$title,
                        'sub_blog_title'=>$sub_blog_title,
                        'blog_des'=>$cat_des,
                        'updated_date'=>date('Y-m-d H:i:s')
                       );

          }else
          {
            $blo_img = $this->upload->data('file_name'); 
           $data = array(
                        'blog_title'=>$title,
                        'sub_blog_title'=>$sub_blog_title,
                        'blog_des'=>$cat_des,
                        'blog_img'=>$blo_img,
                        'img_alt_title'=>$blog_alt_title,
                        'updated_date'=>date('Y-m-d H:i:s')
                       );
          }

          $res = $this->Blog_model->upd_blog($data,$upd_id);

          if($res == true)
          {
              $this->session->set_flashdata('msg','Blog Updated Succesfully');
              redirect(base_url().'Admin/Blog');
          }


    }
  }


  public function del_blog($id)
  {
      $this->check_login();
      $res = $this->Blog_model->del_blog($id);

      if($res == true)
      {
         $this->session->set_flashdata('msg','Blog Deleted Succesfully');
         redirect(base_url().'Admin/Blog');
      }
  }

  //Blog Ends
  
  // Review Starts
  
  public function reviews()
  {
      $this->check_login();
      $pro_id = $this->uri->segment(3);
      if(!empty($pro_id))
      {
       $data['res'] = $this->Reviews_model->rev_list($pro_id);
      }
      else
      {
        $data['res'] = $this->Reviews_model->reviews_list();  
      }
      $data['pro_id'] = $this->uri->segment(3);
      $data['pro'] = $this->Prof_model->posts_list();
      
      $this->load->view('admin/includes/header');
      $this->load->view('admin/includes/sidebar');
      $this->load->view('admin/view_reviews_list',$data);
      $this->load->view('admin/includes/footer');
  }
  
  
  public function edit_reviews($edit_id)
  {
      $this->check_login();
      $data['res'] = $this->Reviews_model->reviews_edit($edit_id);
      
      $this->load->view('admin/includes/header');
      $this->load->view('admin/includes/sidebar');
      $this->load->view('admin/view_edit_review',$data);
      $this->load->view('admin/includes/footer');
  }
  
  
  public function upd_review()
  {
     $this->check_login(); 
     if(!empty($this->input->post('submit')))
     {
        
         extract($this->input->post());
         
         $data = array(
                     'name'=>$nme,
                     'email'=>$email,
                     'content'=>$content,
                     'rating'=>$rating
                    );
         $res = $this->Reviews_model->reviews_upd($data,$upd_id);
         
         if($res == true)
         {
              $this->session->set_flashdata('msg','Review Updated Successfully');
              redirect(base_url().'admin/reviews');
         }
     }
  }
  
  
  public function del_review($del_id)
  {
      $this->check_login();
      $res = $this->Reviews_model->review_del($del_id);
      
      if($res == true)
      {
           $this->session->set_flashdata('msg','Review Deleted Successfully');
           redirect(base_url().'admin/reviews');
      }
  }
  
  
  public function check_login()
  {
      
      if(empty($this->session->userdata('username')))
      {
          redirect(base_url().'admin');
      }
  }
      
  
  
  //Review Ends

}
