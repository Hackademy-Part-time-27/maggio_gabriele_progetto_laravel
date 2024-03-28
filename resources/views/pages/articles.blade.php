<x-layout>
        <h1 class="title ps-4">Articoli</h1>
    
        <div>
            @if($articles)
                <ul>
                    @foreach($articles as $index => $article)
                    @if($article['visible'])
                    <x-card
                    :index="$index"
                    :title="$article['title']"
                    :description="$article['description']"
                    :category="$article['category']"
                    :route="route('article', $index)"
                    />
                    @endif
                    @endforeach
                </ul>
            @else
                <p>Non ci sono articoli disponibili</p>
            @endif
    
        </div>
</x-layout>
