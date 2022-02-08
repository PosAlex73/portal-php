@if($entity->hasPages())
    <ul class="pagination">
        @if(!$entity->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{ $entity->previousPageUrl() }}">{{ __('vars.previous') }}</a>
            </li>
        @endif
        <li class="page-item"><a class="page-link">{{ $entity->currentPage() }}</a></li>
        @if(!$entity->onLastPage())
             <li class="page-item">
                 <a class="page-link" href={{ $entity->nextPageUrl() }}>{{ __('vars.next') }}</a>
             </li>
        @endif
    </ul>
@endif
