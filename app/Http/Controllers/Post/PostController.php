<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\{
    PostStoreRequest, PostUpdateRequest
};
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json($posts, 200);
    }

    public function store(PostStoreRequest $request)
    {
        $post = Post::create([
            'content' => $request->content,
            'user_id' => Auth::id()
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post created successfully',
            'post' => $post
        ], 201);
    }

    public function show(int $id)
    {
        try {

            $post = Post::findOrFail($id);

            return response()->json($post, 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 404);
        }
    }

    public function update(PostUpdateRequest $request, int $id)
    {
        try {

            $post = Post::findOrFail($id);

            $post->update([
                'content' => $request->content,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Post updated successfully',
                'post' => $post
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 404);
        }
    }

    public function destroy(int $id)
    {
        try {
            
            $post = Post::findOrFail($id);

            $post->delete();

            return response()->json([
                'status' => true,
                'message' => 'Post deleted successfully',
                'post' => $post
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 404);
        }
    }
}
