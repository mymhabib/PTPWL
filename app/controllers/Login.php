<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Login"; ?></title>
    <link rel="stylesheet" href="css/custom.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
    class Login extends Controller
    {

        public function index()
        {

            $data = [
                'judul' => 'Login',
                'username' => '',
                'password ' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'judul' => 'Login',
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'usernameError' => '',
                    'passwordError' => ''
                ];
                $nameValidation = "/^[a-zA-Z0-9]*$/";

                //validasi USERNAME
                if (empty($data['username'])) {
                    $data['usernameError'] = 'Mohon masukkan username';
                } elseif (!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Nama hanya boleh terdiri dari angka dan huruf';
                }

                //validasi password
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Mohon masukkan password';
                }

                if (empty($data['usernameError']) && empty($data['passwordError'])) {
                    $loggedInUser = $this->model('Login_model')->login($data['username'], $data['password']);

                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Ada kesalahan pada password atau username. Mohon coba lagi';

                        $this->view('login/index', $data);
                    }
                }
            } else {
                $data = [
                    'judul' => 'Login',
                    'username' => '',
                    'password ' => '',
                    'usernameError' => '',
                    'passwordError' => ''
                ];
            }
            $this->view('login/index', $data);
        }

        public function createUserSession($user)
        {
            $_SESSION['ptpwl_user_id'] = $user->id;
            $_SESSION['ptpwl_username'] = $user->username;
            $_SESSION['ptpwl_admin'] = $user->admin;
            header('location:' . BASEURL . 'home');
        }

        public function logout()
        {
            unset($_SESSION['ptpwl_user_id']);
            unset($_SESSION['ptpwl_username']);
            unset($_SESSION['ptpwl_admin']);
            header('location:' . BASEURL . 'login');
        }
    }
