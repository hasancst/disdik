<script>
    $(document).ready(function() {
        $(document).on('click', '#usernonaktif', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var isdel = $(this).data('isdel');

            var status = $(this).data('status');
            var actstatus = $(this).data('actstatus');
            $('#usernonaktif-valid').val(id);
            $('#usernonaktif-valdel').val(isdel);
            $('#usernonaktif-valname').val(name);
            $('#usernonaktif-name').text(name);
            $('#usernonaktif-status').text(status);
            $('#usernonaktif-actstatus').text(actstatus);
        })
        $(document).on('click', '#userresetpass', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $('#userresetpass-valid').val(id);
            $('#userresetpass-valname').val(name);
            $('#userresetpass-name').text(name);
        })
        // $(document).on('click', '#userchangepass', function() {
        //     var id = $(this).data('id');
        //     var name = $(this).data('name');
        //     $('#userresetpass-valid').val(id);
        //     $('#userresetpass-valname').val(name);
        //     $('#userresetpass-name').text(name);
        // })

        $(document).on('click', '#beritainfo', function() {
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/post/' + post_image;
            var post_author = $(this).data('post_author');

            var post_categories = $(this).data('post_categories');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags');
            var created_at = $(this).data('created_at');
            var created_by = $(this).data('created_by');
            $('#beritainfopost_title').text(post_title);
            $('#beritainfopost_content').html(post_content);
            $('#beritainfopost_image').attr('src', image);
            <?php

            use App\Models\ModelUsers;

            $model = new ModelUsers();
            $nameUser = $model->where('id', 1)->findAll();
            echo "$('#beritainfopost_author').text('{$nameUser[0]['user_full_name']}');";
            ?>;
            $('#beritainfopost_categories').text(post_categories);
            $('#beritainfopost_type').text(post_type);
            $('#beritainfopost_status').text(post_status);
            $('#beritainfopost_visibility').text(post_visibility);
            $('#beritainfopost_comment_status').text(post_comment_status);
            $('#beritainfopost_tags').text(post_tags);
            $('#beritainfocreated_at').text(created_at);
            $('#beritainfocreated_by').text(created_by);

        })
        $(document).on('click', '#beritaedit', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/post/' + post_image;
            var post_author = $(this).data('post_author');
            var post_categories = $(this).data('post_categories').split(', ');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags').split(', ');
            $('#beritaeditpost_id').val(id);

            $('#beritaeditpost_title').val(post_title);
            $('#beritaeditpost_content').val(post_content).summernote();
            $('#beritaeditpost_image').attr('src', image);
            $('#beritaeditpost_image').val(post_image);
            $('#beritaeditpost_images').val(post_image);
            $('#beritaeditpost_author').val(post_author);
            $('#beritaeditpost_type').val(post_type);
            $('#beritaeditpost_status').val(post_status).prop('checked', true);
            $('#beritaeditpost_visibility').val(post_visibility).prop('checked', true);
            $('#beritaeditpost_comment_status').val(post_comment_status).prop('checked', true);

            for (var i = 0; i < post_categories.length; i++) {
                $('#beritaeditpost_categories[value="' + post_categories[i] + '"]').prop('checked', 'checked');
            }
            for (var i = 0; i < post_tags.length; i++) {
                $('#beritaeditpost_tags[value="' + post_tags[i] + '"]').prop('checked', 'checked');
            }
        })
        $(document).on('click', '#beritadel', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');

            $('#beritadel_id').val(id);

            $('#beritadel_title').text(post_title);

        })
        $(document).on('click', '#infoinfo', function() {
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = post_image != '' ? 'Assets/informasi/' + post_image : '';
            if (image == '') {
                document.getElementById('infoinfopost_image').hidden = true;
            }
            var post_author = $(this).data('post_author');

            var post_categories = $(this).data('post_categories');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags');
            var created_at = $(this).data('created_at');
            var created_by = $(this).data('created_by');
            $('#infoinfopost_title').text(post_title);
            $('#infoinfopost_content').html(post_content);
            $('#infoinfopost_image').attr('src', image);
            <?php
            $model = new ModelUsers();
            $nameUser = $model->where('id', 1)->findAll();
            echo "$('#infoinfopost_author').text('{$nameUser[0]['user_full_name']}');";
            ?>;
            // $('#infoinfopost_author').text(post_author);
            $('#infoinfopost_categories').text(post_categories);
            $('#infoinfopost_type').text(post_type);
            $('#infoinfopost_status').text(post_status);
            $('#infoinfopost_visibility').text(post_visibility);
            $('#infoinfopost_comment_status').text(post_comment_status);
            $('#infoinfopost_tags').text(post_tags);
            $('#infoinfocreated_at').text(created_at);
            $('#infoinfocreated_by').text(created_by);

        })
        $(document).on('click', '#infoedit', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = post_image != '' ? 'Assets/informasi/' + post_image : '';
            if (image == '') {
                document.getElementById('infoeditpost_image').hidden = true;
            }
            var post_author = $(this).data('post_author');
            var post_categories = $(this).data('post_categories').split(', ');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags').split(', ');

            $('#infoeditpost_id').val(id);
            $('#infoeditpost_title').val(post_title);
            $('#infoeditpost_content').val(post_content).summernote();
            $('#infoeditpost_image').attr('src', image);
            $('#infoeditpost_image').val(post_image);
            $('#infoeditpost_images').val(post_image);
            $('#infoeditpost_author').val(post_author);
            $('#infoeditpost_type').val(post_type);
            $('#infoeditpost_status').val(post_status).prop('checked', true);
            $('#infoeditpost_visibility').val(post_visibility).prop('checked', true);
            $('#infoeditpost_comment_status').val(post_comment_status).prop('checked', true);

            for (var i = 0; i < post_categories.length; i++) {
                $('#infoeditpost_categories[value="' + post_categories[i] + '"]').prop('checked', 'checked');
            }
            for (var i = 0; i < post_tags.length; i++) {
                $('#infoeditpost_tags[value="' + post_tags[i] + '"]').prop('checked', 'checked');
            }
        })
        $(document).on('click', '#infodel', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');

            $('#infodel_id').val(id);

            $('#infodel_title').text(post_title);

        })
        $(document).on('click', '#staffedit', function() {
            var id = $(this).data('id');
            var idorg = $(this).data('idorg');
            var name = $(this).data('name');
            var nip = $(this).data('nip');
            var nik = $(this).data('nik');
            var photo = $(this).data('photo');
            var jabatan = $(this).data('jabatan');
            var bidang = $(this).data('bidang');
            var atasan = $(this).data('atasan');
            var inti = $(this).data('inti');
            if (inti == 'pimpinan' || inti == 'kepala1' || inti == 'kasub') {
                document.getElementById('bidang').hidden = true;
                document.getElementById('jabatan').className = 'col-md-12';
            } else {
                document.getElementById('jabatan').className = 'col-md-4';
                document.getElementById('bidang').hidden = false;
            }
            if (inti == 'kabid' || inti == 'pimpinan' || inti == 'kepala1' || inti == 'kasub') {
                document.getElementById('editatasan').hidden = true;
            } else {
                document.getElementById('editatasan').hidden = false;
            }
            $('#showgambarstaff').attr('src', photo);

            $('#editjabatan').text(jabatan);
            $('#editstaffid').val(id);
            $('#editstaffidorg').val(idorg);
            $('#editstaffname').val(name);
            $('#editstaffnip').val(nip);
            $('#editstaffnik').val(nik);
            $('#editstaffbidang').val(bidang);
            $('#editstaffatasan').val(atasan);
            $('#editstafftype').val(atasan);
        })
        $(document).on('click', '#staffinfo', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var nip = $(this).data('nip');
            var nik = $(this).data('nik');
            var jabatan = $(this).data('jabatan');
            var atasan = $(this).data('atasan');

            $('#infostaffid').text(id);
            $('#infostaffname').text(name);
            $('#infostaffnip').text(nip);
            $('#infostaffnik').text(nik);
            $('#infostaffjabatan').text(jabatan);
            $('#infostaffatasan').text(atasan);

        })

        $(document).on('click', '#staffdel', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');

            $('#staffdel_id').val(id);

            $('#staffdel_title').text(name);

        })
        $(document).on('click', '#appinfo', function() {
            var name = $(this).data('name');
            var url = $(this).data('url');
            var post_image = $(this).data('img');
            var image = 'Assets/aplikasi/' + post_image;

            $('#appinfo_name').text(name);
            $('#appinfo_url').text(url);
            $('#appinfo_image').attr('src', image);
        })
        $(document).on('click', '#appedit', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var url = $(this).data('url');
            var post_image = $(this).data('img');
            var image = 'Assets/aplikasi/' + post_image;

            $('#appedit_id').val(id);
            $('#appedit_name').val(name);
            $('#appedit_url').val(url);
            $('#appedit_image').attr('src', image);
            $('#appedit_image').val(post_image);
            $('#appedit_images').val(post_image);

        })
        $(document).on('click', '#appdel', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('name');

            $('#appdel_id').val(id);

            $('#appdel_title').text(post_title);

        })
        $(document).on('click', '#sliderinfo', function() {
            var name = $(this).data('post_title');
            var content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/slider/' + post_image;

            $('#sliderinfo_name').text(name);
            $('#sliderinfo_content').text(content);
            $('#sliderinfo_image').attr('src', image);
        })
        $(document).on('click', '#slideredit', function() {
            var id = $(this).data('id');
            var name = $(this).data('post_title');
            var content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/slider/' + post_image;

            $('#slideredit_id').val(id);
            $('#slideredit_name').val(name);
            $('#slideredit_content').val(content);
            $('#slideredit_image').attr('src', image);
            $('#slideredit_image').val(post_image);
            $('#slideredit_images').val(post_image);

        })
        $(document).on('click', '#sliderdel', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');

            $('#sliderdel_id').val(id);

            $('#sliderdel_title').text(post_title);

        })
        $(document).on('click', '#logs', function() {
            var ipaddress = $(this).data('ipaddress');
            var user = $(this).data('user');
            var uri = $(this).data('uri');
            var method = $(this).data('method');
            var status = $(this).data('status');
            var timestamp = $(this).data('timestamp');

            $('#logsipaddress').text(ipaddress);
            $('#logsuser').text(user);
            $('#logsuri').text(uri);
            $('#logsmethod').text(method);
            $('#logsstatus').text(status);
            $('#logstimestamp').text(timestamp);
        })
        $(document).on('click', '#PolingLengkaps', function() {
            var nik = $(this).data('nik');
            var fullname = $(this).data('name');
            var email = $(this).data('email');
            var msg = $(this).data('msg');
            if (msg == "1") {
                msg = "Sangat Puas";
            } else if (msg == "2") {
                msg = "Puas";
            } else if (msg == "3") {
                msg = "Biasa saja";
            } else if (msg == "4") {
                msg = "Tidak Puas";
            } else {
                msg = "Sangat Tidak Puas"
            }
            $('#poling_nik').text(nik);
            $('#poling_name').text(fullname);
            $('#poling_email').text(email);
            $('#poling_msg').text(msg);

        })
        $(document).on('click', '#Pesan_Baca', function() {
            var nik = $(this).data('nik');
            var fullname = $(this).data('name');
            var email = $(this).data('email');
            var msg = $(this).data('msg');

            $('#pesan_nik').text(nik);
            $('#pesan_name').text(fullname);
            $('#pesan_email').text(email);
            $('#pesan_msg').text(msg);

        })
        $(document).on('click', '#itinfo', function() {
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/post/' + post_image;
            var post_author = $(this).data('post_author');

            var post_categories = $(this).data('post_categories');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags');
            var created_at = $(this).data('created_at');
            var created_by = $(this).data('created_by');
            $('#itinfopost_title').text(post_title);
            $('#itinfopost_content').html(post_content);
            $('#itinfopost_image').attr('src', image);
            <?php
            $model = new ModelUsers();
            $nameUser = $model->where('id', 1)->findAll();
            echo "$('#itinfopost_author').text('{$nameUser[0]['user_full_name']}');";
            ?>;
            $('#itinfopost_categories').text(post_categories);
            $('#itinfopost_type').text(post_type);
            $('#itinfopost_status').text(post_status);
            $('#itinfopost_visibility').text(post_visibility);
            $('#itinfopost_comment_status').text(post_comment_status);
            $('#itinfopost_tags').text(post_tags);
            $('#itinfocreated_at').text(created_at);
            $('#itinfocreated_by').text(created_by);

        })
        $(document).on('click', '#itedit', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');
            var post_content = $(this).data('post_content');
            var post_image = $(this).data('post_image');
            var image = 'Assets/post/' + post_image;
            var post_author = $(this).data('post_author');
            var post_categories = $(this).data('post_categories').split(', ');
            var post_type = $(this).data('post_type');
            var post_status = $(this).data('post_status');
            var post_visibility = $(this).data('post_visibility');
            var post_comment_status = $(this).data('post_comment_status');
            var post_tags = $(this).data('post_tags').split(', ');
            $('#iteditpost_id').val(id);

            $('#iteditpost_title').val(post_title);
            $('#iteditpost_content').val(post_content).summernote();
            $('#iteditpost_image').attr('src', image);
            $('#iteditpost_image').val(post_image);
            $('#iteditpost_images').val(post_image);
            $('#iteditpost_author').val(post_author);
            $('#iteditpost_type').val(post_type);
            $('#iteditpost_status').val(post_status).prop('checked', true);
            $('#iteditpost_visibility').val(post_visibility).prop('checked', true);
            $('#iteditpost_comment_status').val(post_comment_status).prop('checked', true);

            for (var i = 0; i < post_categories.length; i++) {
                $('#iteditpost_categories[value="' + post_categories[i] + '"]').prop('checked', 'checked');
            }
            for (var i = 0; i < post_tags.length; i++) {
                $('#iteditpost_tags[value="' + post_tags[i] + '"]').prop('checked', 'checked');
            }
        })
        $(document).on('click', '#itdel', function() {
            var id = $(this).data('id');
            var post_title = $(this).data('post_title');

            $('#itdel_id').val(id);

            $('#itdel_title').text(post_title);

        })
        $(document).on('click', '#checkKabag', function() {
            document.getElementById('inputkabag').hidden = !document.getElementById('inputkabag').hidden;
            document.getElementById('inputkasi').hidden = !document.getElementById('inputkasi').hidden;
        })
        $(document).on('click', '#checkKasi', function() {
            document.getElementById('inputkabag').hidden = !document.getElementById('inputkabag').hidden;
            document.getElementById('inputkasi').hidden = !document.getElementById('inputkasi').hidden;
        })
        $('#infosummernote').summernote();
        $('#newssummernote').summernote();
        $('#infoITsummernote').summernote();
        $('#infoITeditsummernote').summernote();
        $('#tbNews').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
        $('#tbInfo').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#tbPoling').DataTable({
            "paging": true,
            "lengthChange": false,
            "pageLength": 5,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#tbPesan').DataTable({
            "paging": true,
            "lengthChange": false,
            "pageLength": 5,

            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#tbUser').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $('#tugaspokok').summernote();
        $('#tugasfungsi').summernote();

    });


    function readURLpimpinanfoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#pimpinanfoto')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLkantorfoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#kantorfoto')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLslider(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showgambarslider')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLslideredit(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#slideredit_image')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLapp(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showgambarapp')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLappedit(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#appedit_image')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLedit(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#beritaeditpost_image')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showgambar')
                    .attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>