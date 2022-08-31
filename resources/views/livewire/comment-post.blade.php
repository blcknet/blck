<div>
    <h2 class="mt-16 text-2xl">Comentarios</h2>
    <small class="text-gray-500">*Los comentarios están abiertos a todo público, recuerda ser respetuoso.</small>
    <div class="mt-6 flex gap-x-3">
        <img class="h-12 w-12 rounded-full" src="{{ asset('images/usuario-blog.png') }}"
            alt="Usuario predeterminado imagen">
        <x-jet-input wire:keydown.enter="commentPost" wire:model.defer="commentInput" class="flex-1 text-black"
            type="text" placeholder="Ingresa un comentario" />
        <x-jet-button wire:loading.attr="disabled" wire:target="commentPost" wire:click="commentPost">
            Comentar
        </x-jet-button>
    </div>

    <div class="mt-1">
        @error('commentInput')
            <small class="text-red-500">*{{ $message }}</small>
        @enderror
    </div>

    <div class="mt-6">
        @forelse ($commentsPost as $comment)
            <div class="sm:flex items-center justify-between gap-x-3 mt-6">
                <div class="flex justify-start gap-x-3">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('images/usuario-blog.png') }}"
                        alt="Usuario predeterminado imagen">
                    <div>
                        <p>Anónimo <small class="text-gray-400">{{ $comment->created_at->diffForHumans() }}</small>
                        </p>
                        <p class="text-gray-400">{{ $comment->name }}</p>
                    </div>
                </div>

                @can('users.index')
                    <div class="mt-3">
                        <x-jet-button wire:loading.attr="disabled" wire:target="deleteComment"
                            wire:click="deleteComment({{ $comment }})">
                            Eliminar
                        </x-jet-button>
                    </div>
                @endcan
            </div>
        @empty

            <div class="mt-6 text-center text-gray-500">
                No hay comentarios para mostrar.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $commentsPost->links() }}
    </div>
</div>
