<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelEmploye;
use App\Models\ModelLogs;
use App\Models\ModelModuls;
use App\Models\ModelOrganization;
use App\Models\ModelPosts;
use App\Models\ModelQuestion;
use App\Models\ModelSetting;
use App\Models\ModelUsers;
use CodeIgniter\Model;

function del($type, $model)
{
        $session = session();
        $model->delete($_POST['id']);
        $session->setFlashdata('true', $type . ' berhasil dihapus');
}
function UploadGambar($img_name, $vdir_upload, $file, $orientation = 'L')
{
        $vfile_upload = $vdir_upload . $img_name;
        move_uploaded_file($file["tmp_name"], $vfile_upload);

        //identitas file asli
        if ($file['type'] == 'image/png') {
                $im_src = imagecreatefrompng($vfile_upload);
        } elseif ($file['type'] == 'image/jpeg') {
                $im_src = imagecreatefromjpeg($vfile_upload);
        }
        $src_width = imageSX($im_src);
        $src_height = imageSY($im_src);

        if ($orientation == 'L') {
                $dst_width = 720;
                $dst_height = 360;
                $im = imagecreatetruecolor($dst_width, $dst_height);
                imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
                imagejpeg($im, $vdir_upload . $img_name);
        } else {
                $dst_width = 360;
                $dst_height = 720;
                $im = imagecreatetruecolor($dst_width, $dst_height);
                imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
                imagejpeg($im, $vdir_upload . $img_name);
        }
}
function logs($status)
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
class Fungsi extends Controller
{
        public function auth()
        {
                try {
                        $session = session();
                        $model = new ModelUsers();
                        $username   = $_POST['username'];
                        $password       = $_POST['password'];
                        $cekname = $model->where('user_name', $username)->first();
                        if ($cekname != null) {
                                if ($cekname['user_password'] == md5($password)) {
                                        if ($cekname['has_login'] == 'false') {
                                        $ses_data = [
                                                'name'     => $cekname['user_full_name'],
                                                'id'     => $cekname['id'],
                                                'username'     => $cekname['user_name'],
                                                'password'     => md5($password),
                                                'ip_address'     => $_SERVER['REMOTE_ADDR'],
                                                'type'      => $cekname['user_type'],
                                                'logged_in'     => TRUE
                                        ];
                                        $dataaktif = [
                                                'has_login' => true,
                                                'ip_address' => $ses_data['ip_address'],
                                                'last_logged_in' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s")
                                        ];
                                        $model->update($cekname['id'], $dataaktif);
                                        $session->set($ses_data);



                                        return redirect()->to(base_url('/dashboard'));
                                        } else {
                                                $session->setFlashdata('msg', 'Maaf hanya bisa aktif di satu perangkat saja. Akun ini sedang aktif di perangkat lain');
                                         
                                        return redirect()->to(base_url('/login'));
                                        }
                                }
                                $session->setFlashdata('msg', 'Password / Username salah');


                                return redirect()->to(base_url('/login'));
                        } else {
                                $session->setFlashdata('msg', 'Password / Username salah');

                                return redirect()->to(base_url('/login'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function changepass()
        {
                try {
                        $model = new ModelUsers();
                        $session = session();
                        $id = $session->get('id');

                        $now = $_POST['now'];
                        $new = $_POST['new'];
                        $knew = $_POST['knew'];

                        if (md5($now) == $session->get('password')) {
                                if ($new == $knew) {
                                        $data = [
                                                'user_password' => md5($new),
                                                'updated_by' => $session->get('id'),
                                        ];
                                        $model->update($id, $data);
                                        $dataoff = [
                                                'has_login' => 'false',
                                                'last_logged_out' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        ];
                                        $model->update($session->get('id'), $dataoff);

                                        $session->destroy();

                                        return redirect()->to(base_url('/login'));
                                } else {
                                        $session->setFlashdata('false', 'Gagal ubah kata sandi');
                                        return redirect()->to(base_url('/dashboard'));
                                }
                        } else {
                                $session->setFlashdata('false', 'Gagal kata sandi sekarang salah');
                                return redirect()->to(base_url('/dashboard'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function logout()
        {
                try {
                        $session = session();
                        $model = new ModelUsers();
                        $dataoff = [
                                'has_login' => 'false',
                                'last_logged_out' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                        ];
                        $model->update($session->get('id'), $dataoff);

                        $session->destroy();

                        return redirect()->to(base_url());
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function createUser()
        {
                try {
                        $model = new ModelUsers();
                        $session = session();
                        $id = $session->get('id');
                        $data = [
                                'user_name' => $_POST['username'],
                                'user_password'    => md5($_POST['pass']),
                                'user_full_name'    => $_POST['nama'],
                                'user_email'    => $_POST['email'],
                                'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                'created_by' => $id
                        ];

                        $model->insert($data);

                        $session->setFlashdata('msg', 'Berhasil menambahkan pengguna');


                        return redirect()->to(base_url('/pengguna'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function usernonaktif()
        {
                try {
                        $model = new ModelUsers();
                        $session = session();
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $status = $_POST['del'] == 'true' ? 'Mengaktifkan' : 'Menonaktifkan';
                        $data = [
                                'is_deleted' => $_POST['del'] == 'true' ? false : true,
                                'deleted_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                'deleted_by' => $session->get('id'),
                        ];
                        $model->update($id, $data);
                        $session->setFlashdata('msg', 'Berhasil ' . $status . ' ' . $name);


                        return redirect()->to(base_url('/pengguna'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function resetpass()
        {
                try {
                        $model = new ModelUsers();
                        $session = session();
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $data = [
                                'user_password' => md5('123456789'),
                                'updated_by' => $session->get('id'),
                        ];
                        $model->update($id, $data);
                        $session->setFlashdata('msg', 'Berhasil mereset kata sandi pada pengguna ' . $name);


                        return redirect()->to(base_url('/pengguna'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function createNews()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 1) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }
                                $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                $namaFile = md5('post-' . date('Ymd H:i:s') . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title'])) . '.' . $ext;
                                $path = 'Assets/post/';
                                list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                }
                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_image' => $namaFile,
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_type' => 'post',
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],
                                        'post_tags' => $tags,
                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        'created_by' => $session->get('id')
                                ];

                                $model->insert($data);
                                $session->setFlashdata('true', 'Berita berhasil disimpan');

                                return redirect()->to(base_url('/news'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/news'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function editNews()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();

                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 2) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }
                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_tags' => $tags,
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],

                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'updated_by' => $session->get('id'),
                                ];
                                if ($_FILES['gambarnews']['name'] != '') {
                                        $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                        $namaFile = md5('post-' . date('Ymd H:i:s') . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title'])) . '.' . $ext;
                                        $path = 'Assets/post/';
                                        if (file_exists($path . $_POST['gambartextnews'])) {
                                                unlink($path . $_POST['gambartextnews']);
                                        }
                                        list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                        if ($width > $height) {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                        } else {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                        }


                                        $data['post_image'] = $namaFile;
                                }
                                $model->update($_POST['id'], $data);
                                $session->setFlashdata('true', 'Berita berhasil di ubah');

                                return redirect()->to(base_url('/news'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/news'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function delNews()
        {
                try {
                        del('Berita', new ModelPosts());

                        return redirect()->to(base_url('/news'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function createInfo()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 1) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }

                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_type' => 'info',
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],
                                        'post_tags' => $tags,
                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        'created_by' => $session->get('id')
                                ];
                                $lihat = $model->insert($data);

                                $files = $_FILES;
                                $jumlahFile = count($files['listGambar']['name']);
                                if ($files['listGambar']['name'][0] != '') {

                                        $urlfile = 'Assets/informasi/' . $lihat;

                                        $dataup = ['post_image' => $urlfile];
                                        $model->update($lihat, $dataup);
                                        if (!is_dir($urlfile)) {

                                                mkdir($urlfile, 0777, $rekursif = true);
                                        }
                                        for ($i = 0; $i < $jumlahFile; $i++) {
                                                $namaFile = $files['listGambar']['name'][$i];
                                                $lokasiTmp = $files['listGambar']['tmp_name'][$i];

                                                # kita tambahkan uniqid() agar nama gambar bersifat unik
                                                $namaBaru = uniqid() . '-' . $namaFile;
                                                $lokasiBaru = "{$urlfile}/{$namaBaru}";
                                                $prosesUpload = move_uploaded_file($lokasiTmp, $lokasiBaru);

                                                # jika proses berhasil
                                                if ($prosesUpload) {
                                                        echo "Upload file <a href='{$lokasiBaru}' target='_blank'>{$namaBaru}</a> berhasil. <br>";
                                                } else {
                                                        echo "<span style='color: red'>Upload file {$namaFile} gagal</span> <br>";
                                                }
                                        }
                                }
                                $session->setFlashdata('true', 'Informasi berhasil disimpan');

                                return redirect()->to(base_url('/informasi'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/informasi'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function editInfo()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 2) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }
                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_tags' => $tags,
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],

                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'updated_by' => $session->get('id'),
                                ];

                                $model->update($_POST['id'], $data);
                                $session->setFlashdata('true', 'Informasi berhasil di ubah');

                                return redirect()->to(base_url('/informasi'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/informasi'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function delInfo()
        {
                try {
                        $model = new ModelPosts();
                        del('Informasi', $model);
                        $filex    = 'Assets/informasi/' . $_POST['id'] . '/';
                        if (file_exists($filex)) {

                                $open    = opendir($filex) or die('Folder tidak ditemukan ...!');
                                while ($file    = readdir($open)) {
                                        if ($file != '.' && $file != '..') {
                                                if (file_exists($filex . $file)) {
                                                        unlink($filex . $file);
                                                }
                                        }
                                }


                                rmdir('Assets/informasi/' . $_POST['id']);
                        }

                        return redirect()->to(base_url('/informasi'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function settingWeb()
        {
                try {
                        $model = new ModelSetting();

                        if ($_FILES['logo']['name'] != '') {
                                $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                                $namaFile = 'logo.' . $ext;
                                $path = 'Assets/settings/';
                                list($width, $height) = getimagesize($_FILES['logo']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['logo']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['logo'], 'P');
                                }
                                $model->update('3', ['setting_value' => $namaFile]);
                        }


                        if ($_FILES['sublogo']['name'] != '') {
                                $ext = pathinfo($_FILES['sublogo']['name'], PATHINFO_EXTENSION);
                                $namaFile = 'sublogo.' . $ext;
                                $path = 'Assets/settings/';
                                list($width, $height) = getimagesize($_FILES['sublogo']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['sublogo']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['sublogo'], 'P');
                                }
                                $model->update('4', ['setting_value' => $namaFile]);
                        }

                        return redirect()->to(base_url('/pengaturan'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function settingprofile()
        {
                try {
                        $model = new ModelSetting();
                        $model->update('1', ['setting_value' => $_POST['name']]);
                        $model->update('2', ['setting_value' => $_POST['subname']]);
                        $model->update('5', ['setting_value' => $_POST['alamat']]);
                        $model->update('6', ['setting_value' => $_POST['linkmap']]);
                        $model->update('8', ['setting_value' => $_POST['telp']]);
                        $model->update('9', ['setting_value' => $_POST['email']]);
                        $model->update('10', ['setting_value' => $_POST['instagram']]);
                        $model->update('11', ['setting_value' => $_POST['twitter']]);
                        $model->update('12', ['setting_value' => $_POST['facebook']]);
                        $model->update('13', ['setting_value' => $_POST['name']]);
                        $model->update('14', ['setting_value' => $_POST['tentang']]);
                        $model->update('15', ['setting_value' => $_POST['pimpinanname']]);
                        $model->update('16', ['setting_value' => $_POST['pimpinannip']]);
                        $model->update('17', ['setting_value' => $_POST['pimpinanjabatan']]);
                        $model->update('20', ['setting_value' => $_POST['tugaspokok']]);
                        $model->update('21', ['setting_value' => $_POST['tugasfungsi']]);

                        if ($_FILES['pimpinan_foto']['name'] != '') {
                                $ext = pathinfo($_FILES['pimpinan_foto']['name'], PATHINFO_EXTENSION);
                                $namaFile = 'pimpinan_foto.' . $ext;
                                $path = 'Assets/settings/';
                                list($width, $height) = getimagesize($_FILES['pimpinan_foto']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['pimpinan_foto']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['pimpinan_foto'], 'P');
                                }
                                $model->update('18', ['setting_value' => $path . $namaFile]);
                        }
                        if ($_FILES['kantor_foto']['name'] != '') {
                                $ext = pathinfo($_FILES['kantor_foto']['name'], PATHINFO_EXTENSION);
                                $namaFile = 'kantor_foto.' . $ext;
                                $path = 'Assets/settings/';
                                list($width, $height) = getimagesize($_FILES['kantor_foto']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['kantor_foto']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['kantor_foto'], 'P');
                                }
                                $model->update('19', ['setting_value' => $path . $namaFile]);
                        }




                        return redirect()->to(base_url('/instansi'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function createStaff()
        {
                try {
                        $model = new ModelEmploye();
                        $modelor = new ModelOrganization();
                        $session = session();
                        $data = [
                                'full_name' => $_POST['name'],
                                'nip' => $_POST['nip'],
                                'nik' => $_POST['nik'],
                                'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                'created_by' => $session->get('id')
                        ];
                        $lihat = $model->insert($data);
                        $dataor = [
                                'name' => $_POST['jabatan'],
                                'description' => $_POST['jabatan'] == 'kabid' ? $_POST['kabag'] : $_POST['kasi'],
                                'root' => $_POST['jabatan'] == 'kabid' ? 1 : $modelor->where('person', $_POST['atasan'])->findAll()[0]['id_org'],
                                'person' => $lihat
                        ];
                        $modelor->insert($dataor);

                        $session->setFlashdata('true', 'Staff telah disimpan');

                        return redirect()->to(base_url('/staff'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function editStaff()
        {
                try {


                        $model = new ModelEmploye();
                        $modelorg = new ModelOrganization();
                        $session = session();
                        $data = [
                                'full_name' => $_POST['name'],
                                'nip' => $_POST['nip'],
                                'nik' => $_POST['nik'],
                                'updated_by' => $session->get('id')
                        ];
                        $dataorg = [
                                'description' => $_POST['jabatan'],
                                'root' => $_POST['type'],
                        ];
                        $model->update($_POST['id'], $data);
                        $modelorg->update($_POST['idorg'], $dataorg);
                        $session->setFlashdata('true', 'Staff telah diubah');

                        return redirect()->to(base_url('/staff'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function staffdel()
        {
                try {
                        $model = new ModelOrganization();
                        del('staff', new ModelEmploye());

                        $model->delete($_POST['idorg']);


                        return redirect()->to(base_url('/staff'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function createApps()
        {
                try {
                        $model = new ModelModuls();
                        $session = session();
                        if (count($model->where('module_name', $_POST['name'])->findAll()) < 1) {
                                $ext = pathinfo($_FILES['gambarapp']['name'], PATHINFO_EXTENSION);
                                $namaFile = md5('aplikasi-' . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['name'])) . '.' . $ext;
                                $path = 'Assets/aplikasi/';
                                list($width, $height) = getimagesize($_FILES['gambarapp']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['gambarapp']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['gambarapp'], 'P');
                                }
                                $data = [
                                        'module_name' => $_POST['name'],
                                        'module_url' => $_POST['url'],
                                        'module_img' => $namaFile,
                                        'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        'created_by' => $session->get('id')
                                ];
                                $model->insert($data);

                                $session->setFlashdata('true', 'Aplikasi berhasil disimpan');

                                return redirect()->to(base_url('/aplikasi'));
                        } else {
                                $session->setFlashdata('false', 'Nama Aplikasi sudah ada');

                                return redirect()->to(base_url('/aplikasi'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function editApps()
        {
                try {
                        $model = new ModelModuls();
                        $session = session();

                        if (count($model->where('module_name', $_POST['name'])->findAll()) < 2) {
                                $ext = '';

                                $data = [
                                        'module_name' => $_POST['name'],
                                        'module_url' => $_POST['url'],
                                        'updated_by' => $session->get('id'),
                                ];
                                foreach ($_FILES as $key => $item) {
                                        if (is_array($item)) {
                                                foreach ($item as $key2 => $item2) {
                                                        echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                                                }
                                        } else {
                                                echo $key . ' :  ' . $item . '<br>';
                                        }
                                }

                                foreach ($_POST as $key => $item) {
                                        if (is_array($item)) {
                                                foreach ($item as $key2 => $item2) {
                                                        echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                                                }
                                        } else {
                                                echo $key . ' :  ' . $item . '<br>';
                                        }
                                }
                                if ($_FILES['gambarnews']['name'] != '') {
                                        $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                        $namaFile = md5('aplikasi-' . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['name'])) . '.' . $ext;
                                        $path = 'Assets/aplikasi/';
                                        if (file_exists($path . $_POST['gambartextnews'])) {
                                                unlink($path . $_POST['gambartextnews']);
                                        }
                                        list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                        if ($width > $height) {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                        } else {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                        }


                                        $data['module_img'] = $namaFile;
                                }


                                $model->update($_POST['id'], $data);
                                $session->setFlashdata('true', 'Aplikasi berhasil di ubah');

                                return redirect()->to(base_url('/aplikasi'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/aplikasi'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function delApps()
        {
                try {
                        del('Applikasi', new ModelModuls());

                        return redirect()->to(base_url('/aplikasi'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function createSlider()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 1) {
                                $ext = pathinfo($_FILES['gambarapp']['name'], PATHINFO_EXTENSION);
                                $namaFile = md5('slider-' . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title'])) . '.' . $ext;
                                $path = 'Assets/slider/';

                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['content'],
                                        'post_image' => $namaFile,
                                        'post_type' => 'slider',
                                        'post_author' => $session->get('id'),
                                        'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        'created_by' => $session->get('id')
                                ];
                                $model->insert($data);
                                list($width, $height) = getimagesize($_FILES['gambarapp']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['gambarapp']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['gambarapp'], 'P');
                                }

                                $session->setFlashdata('true', 'Aplikasi berhasil disimpan');
                                logs(error_get_last()['message'] . ' |File :  ' . error_get_last()['file'] . ' line ' . error_get_last()['line']);
                                return redirect()->to(base_url('/slider'));
                        } else {
                                $session->setFlashdata('false', 'Nama Aplikasi sudah ada');

                                return redirect()->to(base_url('/slider'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function editSlider()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['name'])->findAll()) < 2) {

                                $data = [
                                        'post_title' => $_POST['name'],
                                        'post_content' => $_POST['content'],
                                        'updated_by' => $session->get('id'),
                                ];
                                if ($_FILES['gambarnews']['name'] != '') {
                                        $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                        $namaFile = md5('slider-' . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['name'])) . '.' . $ext;
                                        $path = 'Assets/slider/';
                                        if (file_exists($path . $_POST['gambartextnews'])) {
                                                unlink($path . $_POST['gambartextnews']);
                                        }
                                        list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                        if ($width > $height) {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                        } else {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                        }

                                        $data['post_image'] = $namaFile;
                                }


                                $model->update($_POST['id'], $data);
                                $session->setFlashdata('true', 'Slider berhasil di ubah');

                                return redirect()->to(base_url('/slider'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/slider'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function delSlider()
        {
                try {
                        del('Slider', new ModelPosts());

                        return redirect()->to(base_url('/slider'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function kirimPesan()
        {
                try {
                        $model = new ModelQuestion();
                        $session = session();
                        $data = [
                                'type' => 'pesan',
                                'nik' => $_POST['nik'],
                                'fullname' => $_POST['nama_pesan'],
                                'email' => $_POST['email_pesan'],
                                'message' => $_POST['pesan_pesan'],
                                'ip_address'     => $_SERVER['REMOTE_ADDR'],
                                'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s")
                        ];
                        $model->insert($data);
                        $session->setFlashdata('msg', 'Pesan berhasil terkirim');


                        return redirect()->to(base_url('#tampilpesan'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function poling()
        {
                try {
                        $model = new ModelQuestion();
                        $session = session();
                        $data = [
                                'type' => 'poling',
                                'nik' => $_POST['nik'],
                                'fullname' => $_POST['nama_pesan'],
                                'email' => $_POST['email_pesan'],
                                'message' => $_POST['poling'],
                                'ip_address'     => $_SERVER['REMOTE_ADDR'],
                                'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s")
                        ];
                        $model->insert($data);
                        $session->setFlashdata('msg', 'Poling berhasil terkirim');

                        return redirect()->to(base_url('#tampilpesan'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function createit()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();
                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 1) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }
                                $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                $namaFile = md5('it-' . date('Ymd H:i:s') . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title'])) . '.' . $ext;
                                $path = 'Assets/post/';
                                list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                if ($width > $height) {
                                        UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                } else {
                                        UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                }
                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_image' => $namaFile,
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_type' => 'it',
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],
                                        'post_tags' => $tags,
                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'created_at' => date_format(date_create(null, timezone_open("Asia/Jakarta")), "Y-m-d H:i:s"),
                                        'created_by' => $session->get('id')
                                ];
                                $model->insert($data);
                                $session->setFlashdata('true', 'Ponjok IT berhasil disimpan');

                                return redirect()->to(base_url('/infoit'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/infoit'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }

        public function editit()
        {
                try {
                        $model = new ModelPosts();
                        $session = session();

                        if (count($model->where('post_title', $_POST['title'])->findAll()) < 2) {
                                $ext = '';
                                $category = '';
                                $tags = '';
                                $isCategory = $_POST['category'];
                                $isTags = $_POST['tag'];
                                foreach ($isCategory as $check) {
                                        if ($category != '') {
                                                $category = $category . ', ' . $check;
                                        } else {
                                                $category = $check;
                                        }
                                }
                                foreach ($isTags as $check) {
                                        if ($tags != '') {
                                                $tags = $tags . ', ' . $check;
                                        } else {
                                                $tags = $check;
                                        }
                                }
                                $data = [
                                        'post_title' => $_POST['title'],
                                        'post_content' => $_POST['konten'],
                                        'post_author' => $session->get('id'),
                                        'post_categories' => $category,
                                        'post_tags' => $tags,
                                        'post_status' => $_POST['status'],
                                        'post_visibility' => $_POST['akses'],
                                        'post_comment_status' => $_POST['comment'],

                                        'post_slug' => preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title']),
                                        'updated_by' => $session->get('id'),
                                ];
                                if ($_FILES['gambarnews']['name'] != '') {
                                        $ext = pathinfo($_FILES['gambarnews']['name'], PATHINFO_EXTENSION);
                                        $namaFile = md5('it-' . date('Ymd H:i:s') . preg_replace('/[^A-Za-z0-9-]+/', '-',  $_POST['title'])) . '.' . $ext;
                                        $path = 'Assets/post/';
                                        list($width, $height) = getimagesize($_FILES['gambarnews']['tmp_name']);
                                        if ($width > $height) {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews']);
                                        } else {
                                                UploadGambar($namaFile, $path, $_FILES['gambarnews'], 'P');
                                        }
                                        $data['post_image'] = $namaFile;
                                }

                                foreach ($data as $key => $item) {
                                        if (is_array($item)) {
                                                foreach ($item as $key2 => $item2) {
                                                        echo $key . '-' . $key2 . ' :  ' . $item2 . '<br>';
                                                }
                                        } else {
                                                echo $key . ' :  ' . $item . '<br>';
                                        }
                                }
                                $model->update($_POST['id'], $data);
                                $session->setFlashdata('true', 'Ponjok IT berhasil di ubah');

                                return redirect()->to(base_url('/infoit'));
                        } else {
                                $session->setFlashdata('false', 'Judul sudah ada');

                                return redirect()->to(base_url('/infoit'));
                        }
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
        public function delit()
        {
                try {
                        del('Ponjok IT', new ModelPosts());

                        return redirect()->to(base_url('/infoit'));
                } catch (\Throwable $th) {
                        logs($th);
                }
        }
}
