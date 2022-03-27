<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use App\Http\Requests\BlogRequest;
use Illuminate\View\View;

class BlogController extends Controller
{

    public function __construct(
        BlogService $blogService
    ) {
        $this->blogService = $blogService;
    }

    /**
     * blog一覧ページの表示
     *
     * @return view
     */
    public function index()
    {
        $blog_infos = $this->blogService->getALLBlogs();
        return view('admin.index', ['blog_infos' => $blog_infos]);
    }

    /**
     * 新規投稿作成
     *
     * @return view
     */
    public function store()
    {
        return view('admin.store');
    }

    /**
     * 新規作成・投稿編集の情報保存
     *
     * @param BlogRequest $post_data
     * @return view
     */
    public function update(BlogRequest $post_data)
    {
        dd($post_data);
        $this->blogService->update($post_data);
        return redirect(route('blogs.index'));
    }

    /**
     * 投稿編集
     *
     * @param integer $blog_id
     * @return view
     */
    public function edit(int $blog_id)
    {
        $blog_info = $this->blogService->getBlog($blog_id);
        return view('admin.blogs.edit', ['blog_info' => $blog_info]);
    }

    /**
     * 投稿編集
     *
     * @param integer $blog_id
     * @return view
     */
    public function show(int $blog_id)
    {
        $blog_info = $this->blogService->getBlog($blog_id);
        return view('admin.blogs.show', ['blog_info' => $blog_info]);
    }

    /**
     * 投稿削除
     *
     * @param integer $blog_id
     * @return view
     */
    public function deleteBlog(int $blog_id)
    {
        $this->BlogService->deleteBlog($blog_id);
        return redirect(route('blog.index'));
    }
}
