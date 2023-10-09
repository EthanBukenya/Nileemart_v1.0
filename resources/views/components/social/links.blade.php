<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

            {{-- facebook --}}
            <x-buttons.social href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank">
                <x-fab-facebook-f class="w-5 h-5" />
            </x-buttons.social>

            {{-- twitter --}}
            <x-buttons.social href="https://www.twitter.com/intent/tweet?url={{ $url }} text={{ $post->title() }}" target="_blank">
                <x-fab-twitter class="w-5 h-5" />
            </x-buttons.social>

            {{-- Whatsapp --}}
            <x-buttons.social href="https://www.wa.me/?text={{ $post->title() }} {{ $url }}" target="_blank">
                <x-fab-whatsapp class="w-5 h-5" />
            </x-buttons.social>

            {{-- telegram --}}
            <x-buttons.social href="https://www.telegram.me/share/url?url={{ $url }}&text={{ $post->title() }}"  target="_blank">
                <x-fab-telegram-plane class="w-5 h-5" />
            </x-buttons.social>
</div>
