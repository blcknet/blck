<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class CommentPost extends Component
{

    use WithPagination;

    public $commentInput = '';
    public $post;

    public $listeners = ['render'];

    protected $rules = [
        'commentInput' => 'required'
    ];

    public function render()
    {
        $commentsPost = $this->post->comments()->latest('id')->paginate(7);
        return view('livewire.comment-post', compact('commentsPost'));
    }

    public function commentPost()
    {
        $this->validate();

        $this->post->comments()->create(
            [
                'name' => $this->commentInput,
            ]
        );

        $this->reset('commentInput');

        $this->emitTo('comment-post', 'render');
    }

    public function deleteComment(Comment $comment)
    {
        $comment->delete();

        $this->emitTo('comment-post', 'render');
    }
}
