<?php

namespace App\Controllers;

use App\Models\ModelEmploye;
use App\Models\ModelLogs;
use App\Models\ModelMCategory;
use App\Models\ModelModuls;
use App\Models\ModelMTags;
use App\Models\ModelOrganization;
use App\Models\ModelPosts;
use App\Models\ModelQuestion;
use App\Models\ModelSetting;
use App\Models\ModelUsers;
use CodeIgniter\Controller;

use function PHPSTORM_META\type;

function settingValues($cari)
{
    $model = new ModelSetting();
    return $model->where('setting_variable', $cari)->findall()[0]['setting_value'];
}

function sessions($page)
{
    $session = session();
    if ($session->get('name') == null) {
        return null;
    } else {
        $data['id'] = $session->get('id');
        $data['name'] = $session->get('name');
        $data['type'] = $session->get('type');
        $data['page'] = $page;
        $modelmcategory = new ModelMCategory();
        $data['mcategories'] = $modelmcategory->orderBy('id', 'DESC')->findAll();
        $modelmtag = new ModelMTags();
        $data['mtags'] = $modelmtag->orderBy('id', 'DESC')->findAll();
        $data['setting_logo'] = settingValues('logo');
        $data['setting_title'] = settingValues('title');
        $modelStaff = new ModelOrganization();
        $data['atasan'] = $modelStaff->join('employees', 'organization.person = employees.id')->where('name', 'kabid')->orderBy('id', 'DESC')->findAll();

        return $data;
    }
}

function out()
{
    $session = session();
    $model = new ModelUsers();
    $dataoff = [
        'has_login' => 'false',
        'last_logged_out' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
    ];
    $model->update($session->get('id'), $dataoff);

    $session->destroy();
}
function logsm($status)
{
    $logs = new ModelLogs();
    $session = session();
    $data = [
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'user' => $session->get('id'),
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD'],
        'status' => $status

    ];
    $logs->insert($data);

    return view('errors/html/error_exception');
}

class Page extends Controller
{
    public function index()
    {
        try {
            $data = sessions('Dashboard');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model1 = new ModelEmploye();
                $model2 = new ModelModuls();
                $model3 = new ModelUsers();
                $model4 = new ModelPosts();
                $model = new ModelQuestion();
                $data['pesanQty'] = count($model->where('type', 'pesan')->orderBy('id', 'DESC')->findAll());
                $data['staffQty'] = count($model1->findAll());
                $data['appQty'] = count($model2->orderBy('id', 'DESC')->findAll());
                $data['userQty'] = count($model3->orderBy('id', 'DESC')->findAll());
                $data['sliderQty'] = count($model4->where('post_type', 'slider')->orderBy('id', 'DESC')->findAll());
                $data['newsQty'] = count($model4->where('post_type', 'post')->orderBy('id', 'DESC')->findAll());
                $data['infoQty'] = count($model4->where('post_type', 'info')->orderBy('id', 'DESC')->findAll());
                $data['title'] = settingValues('title');
                $data['subtitle'] = settingValues('sub_title');
                $data['tentang'] = settingValues('tentang_instansi');
                $data['kantor_foto'] = settingValues('kantor_foto');
                $data['pimpinan_foto'] = settingValues('pimpinan_foto');
                $data['pimpinan_nama'] = settingValues('pimpinan_name');
                $data['pimpinan_nip'] = settingValues('pimpinan_nip');
                $data['pimpinan_jabatan'] = settingValues('pimpinan_jabatan');
                $data['tugas_pokok'] = settingValues('tugas_pokok');
                $data['tugas_fungsi'] = settingValues('tugas_fungsi');
                $data['alamat'] = settingValues('address');
                $data['telp'] = settingValues('telp');
                $data['email'] = settingValues('email');
                $data['instagram'] = settingValues('instagram');
                $data['twitter'] = settingValues('twitter');
                $data['facebook'] = settingValues('facebook');

                $data['sp'] = count($model->where('type', 'poling')->where('message', '1')->orderBy('id', 'DESC')->findAll());
                $data['p'] = count($model->where('type', 'poling')->where('message', '2')->orderBy('id', 'DESC')->findAll());
                $data['bs'] = count($model->where('type', 'poling')->where('message', '3')->orderBy('id', 'DESC')->findAll());
                $data['tp'] = count($model->where('type', 'poling')->where('message', '4')->orderBy('id', 'DESC')->findAll());
                $data['stp'] = count($model->where('type', 'poling')->where('message', '5')->orderBy('id', 'DESC')->findAll());
                // echo '==================================================================server<br>';
                // foreach ($_SERVER as $key => $item) {
                //     if (is_array($item)) {
                //         foreach ($item as $key2 => $item2) {
                //             echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                //         }
                //     } else {
                //         echo $key . ' :  ' . $item . '<br>';
                //     }
                // }
                // echo '==================================================================cookies<br>';

                // foreach ($_COOKIE as $key => $item) {
                //     if (is_array($item)) {
                //         foreach ($item as $key2 => $item2) {
                //             echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                //         }
                //     } else {
                //         echo $key . ' :  ' . $item . '<br>';
                //     }
                // }
                // echo '==================================================================session<br>';

                // foreach ($_SESSION as $key => $item) {
                //     if (is_array($item)) {
                //         foreach ($item as $key2 => $item2) {
                //             echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                //         }
                //     } else {
                //         echo $key . ' :  ' . $item . '<br>';
                //     }
                // }
                // echo '==================================================================request<br>';
                // foreach ($_REQUEST as $key => $item) {
                //     if (is_array($item)) {
                //         foreach ($item as $key2 => $item2) {
                //             echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                //         }
                //     } else {
                //         echo $key . ' :  ' . $item . '<br>';
                //     }
                // }
                // echo '==================================================================env<br>';
                // foreach ($_ENV as $key => $item) {
                //     if (is_array($item)) {
                //         foreach ($item as $key2 => $item2) {
                //             echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                //         }
                //     } else {
                //         echo $key . ' :  ' . $item . '<br>';
                //     }
                // }
                return view('Admin/Dashboard', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
            // echo $th;
        }
    }

    public function pengguna()
    {
        $data = sessions('Pengguna');

        try {
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                if ($data['type'] != "super_user") {
                    return redirect()->to(base_url('dashboard'));
                }
                $model = new ModelUsers();
                $data['data'] = $model->where('id !=', $data['id'])->orderBy('id', 'DESC')->findAll();

                return view('Admin/Pengguna', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function news()
    {
        try {
            $data = sessions('Berita');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelPosts();
                $data['data'] = $model->where('post_type', 'post')->orderBy('id', 'DESC')->findAll();
                return view('Admin/Berita', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function info()
    {
        try {
            $data = sessions('Informasi');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelPosts();
                $data['data'] = $model->where('post_type', 'info')->orderBy('id', 'DESC')->findAll();
                // $data['data'] = $model->orderBy('id', 'DESC')->findAll();
                return view('Admin/Info', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function setting()
    {
        try {
            $data = sessions('Pengaturan');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $data['logo'] = settingValues('logo');
                $data['sublogo'] = settingValues('sub_logo');

                return view('Admin/Setting', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function instansi()
    {
        try {
            $data = sessions('Instansi');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $data['title'] = settingValues('title');
                $data['subtitle'] = settingValues('sub_title');
                $data['tentang'] = settingValues('tentang_instansi');
                $data['kantor_foto'] = settingValues('kantor_foto');
                $data['pimpinan_foto'] = settingValues('pimpinan_foto');
                $data['pimpinan_nama'] = settingValues('pimpinan_name');
                $data['pimpinan_nip'] = settingValues('pimpinan_nip');
                $data['pimpinan_jabatan'] = settingValues('pimpinan_jabatan');
                $data['tugas_pokok'] = settingValues('tugas_pokok');
                $data['tugas_fungsi'] = settingValues('tugas_fungsi');
                $data['alamat'] = settingValues('address');
                $data['telp'] = settingValues('telp');
                $data['email'] = settingValues('email');
                $data['instagram'] = settingValues('instagram');
                $data['twitter'] = settingValues('twitter');
                $data['facebook'] = settingValues('facebook');
                $data['linkMap'] = settingValues('linkMap');

                return view('Admin/Instansi', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function staff()
    {
        try {
            $data = sessions('Staff');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelOrganization();
                $modelemp = new ModelEmploye();
                $data['data'] = $model->join('employees', 'organization.person = employees.id')->findAll();
                $data['emp'] = $modelemp->findAll();
                $data['org'] = $model->findAll();
                return view('Admin/Staff', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }
    public function aplikasi()
    {
        try {
            $data = sessions('Aplikasi');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelModuls();
                $data['data'] = $model->orderBy('id', 'DESC')->findAll();
                return view('Admin/Aplikasi', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function slider()
    {
        try {
            $data = sessions('Slider');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelPosts();
                $data['data'] = $model->where('post_type', 'slider')->orderBy('id', 'DESC')->findAll();
                return view('Admin/Slider', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }
    public function pesan()
    {
        try {
            $data = sessions('Kirim Pesan');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelQuestion();
                $data['dataPesan'] = $model->where('type', 'pesan')->orderBy('id', 'DESC')->findAll();
                $data['dataPoling'] = $model->where('type', 'poling')->orderBy('id', 'DESC')->findAll();
                return view('Admin/Pesan', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }

    public function Poling()
    {
        try {
            $data = sessions('Poling');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelQuestion();
                $data['dataPoling'] = $model->where('type', 'poling')->orderBy('id', 'DESC')->findAll();
                $data['sp'] = count($model->where('type', 'poling')->where('message', '1')->orderBy('id', 'DESC')->findAll());
                $data['p'] = count($model->where('type', 'poling')->where('message', '2')->orderBy('id', 'DESC')->findAll());
                $data['bs'] = count($model->where('type', 'poling')->where('message', '3')->orderBy('id', 'DESC')->findAll());
                $data['tp'] = count($model->where('type', 'poling')->where('message', '4')->orderBy('id', 'DESC')->findAll());
                $data['stp'] = count($model->where('type', 'poling')->where('message', '5')->orderBy('id', 'DESC')->findAll());

                return view('Admin/Poling', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }
    public function infoit()
    {
        try {
            $data = sessions('Info IT');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelPosts();

                $data['data'] = $model->where('post_type', 'it')->orderBy('id', 'DESC')->findAll();
                return view('Admin/Infoit', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }
    public function logs()
    {
        try {
            $data = sessions('Aktivitas');
            if ($data == null) {
                out();
                return redirect()->to('/login');
            } else {
                $model = new ModelLogs();
                $data['data'] = $model->orderBy('timestamp', 'DESC')->findAll();
                return view('Admin/Logs', $data);
            }
        } catch (\Throwable $th) {
            logsm($th);
        }
    }
}
