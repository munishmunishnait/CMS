<?php
	class Pages extends CI_Controller{
		public function view($page = 'home')
		{
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
		
			$data['title'] = ucfirst($page);
		
			$this->load->model('Blog_model');
			$data['posts'] = $this->Blog_model->get_latest_posts();
			$data['categories'] = $this->category_model->get_categories();
		
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
		
	}