@if ($paginator->hasPages())
    <td colspan="6" class="pager form-horizontal">
        @if ($paginator->onFirstPage())
            <button class="btn btn-default disabled"><i class="fa fa-arrow-left"></i></button>
        @else
            <button wire:click="previousPage" id="btnPrev" class="btn btn-default"><i
                    class="fa fa-arrow-left"></i></button>
        @endif

        @foreach ($elements as $element)
            <div class="flex">
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn btn-default active" id="page{{ $page }}"
                                wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                        @else
                            <button class="btn btn-default" id="page{{ $page }}"
                                wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                        @endif
                    @endforeach
                @endif
            </div>
        @endforeach

        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" id="btnNext" class="btn btn-default"><i
                    class="fa fa-arrow-right"></i></button>
        @else
            <button class="btn btn-default disabled"><i class="fa fa-arrow-right"></i></button>
        @endif
        <!-- this can be any element, including an input -->
    </td>
@endif
