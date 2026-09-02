@php
  $terms = get_the_terms($post->ID, 'category');

  $date = date('d/m/Y', strtotime($post->post_date));
@endphp

<article {{ $attributes->merge(['class' => 'c-post']) }} >
  <a class="c-post__permalink" href="{{ get_permalink($post->ID) }}">
  </a>
  <x-image :lg="get_post_thumbnail_id($post->ID)"/>
  <div class="c-post-content">
    <div class="c-post-content-body">
      <x-title tag="h3">{!! $post->post_title !!}</x-title>
      <div class="c-post-content-body__excerpt">
        {!! $post->post_excerpt !!}
      </div>
    </div>
  </div>
</article>
