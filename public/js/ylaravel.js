var editor = new wangEditor('content');

editor.config.uploadImgUrl = '/upload_image';

// 设置 headers（举例）
editor.config.uploadHeaders = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
};

editor.create();
