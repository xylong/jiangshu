<?php
/**
 * Created by PhpStorm.
 * User: xuyunlong
 * Date: 2018/12/23
 * Time: 11:42 AM
 */

namespace App\Handlers;


class ImageUploadHandler
{
    // 只允许以下后缀名的图片文件上传
    protected $allowed_ext = ['png', 'jpg', 'gif', 'jpeg'];

    /**
     * 保存图片
     * @param $file 图片
     * @param $folder   保存目录
     * @param $file_prefix  图片前缀(增加辨析度)
     */
    public function save($file, $folder, $file_prefix)
    {
        // 文件夹切割能让查找效率更高
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        if (!in_array($extension, $this->allowed_ext)) {
            return false;
        }

        $path = $file->storePubliclyAs($folder_name, $filename);

        return asset('storage' . DIRECTORY_SEPARATOR . $path);
    }
}
