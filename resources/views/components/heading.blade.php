<h{{ $level ?? '3'}}
  {{ $attributes->merge(['class' => 'font-extrabold no-underline title-font ' . 'text-' . (isset($size) ? $size : 2) . 'xl' ])}}>
  {!! $slot !!}</h{{ $level ?? '3'}}>