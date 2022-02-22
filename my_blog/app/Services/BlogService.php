<?php

namespace App\Services;

use App\Repositories\BlogRepositoryInterface;
use App\Http\Requests\BlogRequest;
use App\Repositories\BlogRepository;

class BlogService
{
    public function __construct(
        BlogRepositoryInterface $blogRepository = NULL
    ) {
        $this->blogRepository = $blogRepository ?? new BlogRepository();
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllBlogs()
    {
        return $this->blogRepository->getAllBlogs();
    }

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function update(BlogRequest $post_data)
    {
        return $this->blogRepository->update($post_data);
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $blog_id
     * @return Model
     */
    public function getBlog(int $blog_id)
    {
        return $this->blogRepository->getBlog($blog_id);
    }

    /**
     * 投稿削除
     *
     * @param integer $blog_id
     * @return Model
     */
    public function deleteBlog(int $blog_id)
    {
        $this->blogRepository->deleteBlog($blog_id);
    }

    public function store(BlogRequest $post_data)
    {
        return $this->blogRepository->store($post_data);
    }
}
