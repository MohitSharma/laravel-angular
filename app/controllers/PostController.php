<?php

class PostController extends BaseController {
    public function listing() {
        $posts = Post::all();
        return View::make('post.listing', compact('posts'));
    }
    public function single($id) {
        $post = Post::find($id);
        return View::make('post.single', compact('post'));
    }
    
    public function insert() {
//        $post = new Post;
//        $post->title = "Inserted Post";
//        $post->body = "This is newly inserted post";
//        $post->save();
        
        $data = array(
            'title' => 'This is title',
            'body' => 'This is the content',
            'user_id' => 1,
        );
        Post::create($data);
        dd('Post Inserted');
    }

    public function update($id) {
        $post = Post::find($id);
        $post->user_id = 1;
        $post->save();
        dd("Post Updated");
    }
    
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        dd("Post Deleted");
    }
}