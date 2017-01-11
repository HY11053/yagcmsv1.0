

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#summernote').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent").val(contents)
                    console.log($("#lawsContent").val())
                },
            }
        });

        $('#summernote1').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote1').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent1").val(contents)
                    console.log($("#lawsContent1").val())
                },
            }
        });

        $('#summernote2').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote2').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent2").val(contents)
                    console.log($("#lawsContent2").val())
                },
            }
        });

        $('#summernote3').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote3').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent3").val(contents)
                    console.log($("#lawsContent3").val())
                },
            }
        });


        $('#summernote4').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote4').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent4").val(contents)
                    console.log($("#lawsContent4").val())
                },
            }
        });

        $('#summernote5').summernote({
            height: 150,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote5').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                    // console.log('onChange:', contents, $editable);
                    $("#lawsContent5").val(contents)
                    console.log($("#lawsContent5").val())
                },
            }
        });
		
		function get_tags(flags) {
            var obj_tags=document.getElementsByClassName('flat');
            for (i=0; i<obj_tags.length;i++){
                if(flags.indexOf(obj_tags[i].value)!= -1){
                    obj_tags[i].setAttribute('checked','checked');
                }
            }
        }
        get_tags('{{$article_flag}}}');
    })

