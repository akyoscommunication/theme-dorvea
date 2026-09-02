<article class="c-card" animation-stagger>
  @if(isset($url) && $url)
    <a href="{{ $url['url'] }}">
      @endif

      <x-media :media="$image"/>

      <div class="c-card-body">
        <x-title :tag="$title['tag']">{!! $title['value'] !!}</x-title>
        <div class="c-card-body__text">
          {!! $content !!}
        </div>
      </div>

      @if(isset($url) && $url)
    </a>
  @endif
</article>
