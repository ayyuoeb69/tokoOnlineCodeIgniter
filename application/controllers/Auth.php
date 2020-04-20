<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		
		
	}
	public function register()
	{
		$this->load->library('form_validation');
//        jika anda mau, anda bisa mengatur tampilan pesan error dengan menambahkan element dan css nya
		
//        rules validasi
		$capt_reg = $this->input->post('capt-reg');
		$ses_capt_reg = $this->session->userdata('mycaptcha_reg');
		
		$this->form_validation->set_rules('pass-reg', 'Password Form', 'required');
		$this->form_validation->set_rules('con-pass-reg', 'Konfirmasi Password Form', 'matches[pass-reg]');

		if($this->form_validation->run() === false){
			?>
			<script>

				alert('Password Tidak Cocok !');

				history.go(-1);

			</script>
			<?php	
		}else{
			if($capt_reg == $ses_capt_reg){
				if($this->auth_model->register_model() === true){
						redirect(base_url());
				}else{
					?>
					<script>

						alert('Username Telah Digunakan !');

						history.go(-1);

					</script>
					<?php	
				}
			}else{
				?>
				<script>

					alert('Captcha Salah !');

					history.go(-1);

				</script>
				<?php	
			}
		}
	}
	public function login_user()
	{
		$capt_log = $this->input->post('capt-log');
		$ses_capt_log = $this->session->userdata('mycaptcha_log');
		if($capt_log == $ses_capt_log){
			if($this->auth_model->login_model() === true){
				redirect(base_url());

			}else{
				?>
				<script>

					alert('Login Gagal ! Username dan Password Tidak Cocok');

					history.go(-1);

				</script>
				<?php	
			}
		}
		else{
			?>
			<script>

				alert('Captcha Salah !');

				history.go(-1);

			</script>
			<?php	
		}
	}
}