@php
  use Akyos\Access\Support\SinglePostHelper;

  $terms = get_the_terms(get_the_ID(), 'category');
  $term = array_shift($terms);
  $singleEnhanced = SinglePostHelper::isEnabled();
@endphp

<article @if($singleEnhanced) class="single--enhanced" @endif>
  @component('blocks.hero-access', [
     'title' => [
       'tag' => 'h1',
       'value' => get_the_title()
      ],
      'button' => [],
       'description' => '',
       'image_background' => get_post_thumbnail_id(get_the_ID())
   ])
  @endcomponent

  <section class="single-content">
    @include('akyos-access::partials.single-article-content', ['showDate' => true])

    @if($term && $getPostsTerm($term->slug, 3, 'category', [get_the_ID()]))
      <div class="single-content__other-posts">
        <div class="container">
          <x-title tag="h2" animation-mask>
            Voir plus d'articles
          </x-title>

          <div class="single-content__other-posts-grid">
            @foreach($getPostsTerm($term->slug, 3, 'category', [get_the_ID()]) as $post)
              <x-post :post="$post" animation-stagger/>
            @endforeach
          </div>

          <x-button href="{{ get_term_link($term) }}"
                    appearance="secondary">
            Découvrir les autres articles
          </x-button>
        </div>
      </div>
    @endif
  </section>
</article>
