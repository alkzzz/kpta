@foreach($items as $item)
  <li @if($item->hasChildren()) class="dropdown" @endif>
      <a href="{!! $item->url() !!}" @if($item->hasChildren()) class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" @endif>
      {!! $item->title !!}  @if($item->hasChildren()) <span class="caret"></span> @endif </a>
      @if($item->hasChildren())
        <ul class="dropdown-menu">
              @include('partials.menu', array('items' => $item->children()))
        </ul> 
      @endif
  </li>
@endforeach

