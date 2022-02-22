<?php

namespace App\Repositories;

use App\Models\Blog;
use phpDocumentor\Reflection\Types\Null_;

class BlogRepository implements BlogRepositoryInterface
{
    public function __construct(Blog $Blogs = NULL)
    {
        $this->Blog = $Blogs ?? new Blog();
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllBlogs()
    {
        return $this->Blog
            ->select('*')
            ->where('is_ok', '=', 1)
            ->get();
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $Blog_id
     * @return Model
     */
    public function getBlog(Int $Blog_id)
    {
        return $this->Blog->find($Blog_id);
    }

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function update($post_data)
    {
        dd($post_data);
        Blog::where('id', $post_data->id)->update([
            'title' => $post_data->title,
            'image_url' => $post_data->image_url
        ]);
    }

    /**
     * 投稿削除
     *
     * @param integer $Blog_id
     * @return Model
     */
    public function deleteBlog(Int $Blog_id)
    {
        return $this->Blog->where('id', '=', $Blog_id)->update(['is_showing' => 0]);
    }

    /**
     * 新規投稿
     *
     *
     */
    public function store($post_data)
    {
        Blog::store([
            'title' => $post_data->title,
            'image_url' => $post_data->image_url
        ]);
    }
}
