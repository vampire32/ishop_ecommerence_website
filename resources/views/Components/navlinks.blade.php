@props(['active'])

<a {{$attributes}} class="{{ $active ? 'text-blue-600':'text-gray-400'}} text-sm  hover:text-gray-500" aria-current="{{$active ? 'page' : 'false'}}">{{$slot}} </a>
