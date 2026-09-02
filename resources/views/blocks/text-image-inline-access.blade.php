<section class="s-text-image-inline {{ $classes }}" style="{{ $styles }}">

  <div class="container {{ $position }}">
    @if($images && isset($images[0]))
      <div class="s-text-image-inline-image" animation-stagger>
        <x-media :media="$images[0]"/>
      </div>
    @endif

    <div class="s-text-image-inline-content" animation-stagger>
      <x-title_text name="s-text-image-inline" :title="$title" :description="$content"/>

      @if($button && $button['link']['url'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif

      @if($images && isset($images[1]))
        <x-media :media="$images[1]"/>
      @endif
    </div>
  </div>
</section>
