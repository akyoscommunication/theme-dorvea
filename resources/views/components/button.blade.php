<a {{ $attributes->merge(['class' => 'btn'.($appearance ? " btn--$appearance" : null)]) }}>
  <span>{!! $slot !!}</span>
  <div class="btn__line"></div>
  <div class="btn__line2"></div>
</a>
