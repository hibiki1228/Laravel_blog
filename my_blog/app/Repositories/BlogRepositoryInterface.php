<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\BlogRequest;

interface BlogRepositoryInterface
{
    /**
     * 映画内容の取得
     *
     * @return Model
     */
    public function getAllBlogs();

    /**
     * 映画内容IDに紐づく投稿内容の取得
     *
     * @param integer $blog_id
     * @return Model
     */
    public function getBlog(Int $blog_id);

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function update($post_data);

    // public function updateBlog(UpdateDto $updateDto);

    /**
     * 投稿削除
     *
     * @param integer $blog_id
     * @return Model
     */
    public function deleteBlog(Int $blog_id);

    /**
     * 新規投稿
     */
    public function store($post_data);
}
