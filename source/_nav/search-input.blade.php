<button
    title="Start searching"
    type="button"
    class="flex md:hidden bg-cool-gray-100 hover:bg-blue-100 justify-center items-center border border-cool-gray-300 rounded-full focus:outline-none h-10 px-3"
    onclick="searchInput.toggle()"
>
    <img src="/assets/img/magnifying-glass.svg" alt="search icon" class="h-4 w-4 max-w-none">
</button>

<div id="js-search-input" class="docsearch-input__wrapper flex flex-row items-center hidden md:block">
    <label for="search" class="hidden">Search</label>

    <input
        id="docsearch-input"
        class="docsearch-input relative block h-10 transition-fast w-full lg:w-1/2 xl:w-1/3 bg-cool-gray-100 outline-none rounded-full text-cool-gray-700 border border-cool-gray-300 focus:border-blue-400 ml-auto px-4 pb-0"
        name="docsearch"
        type="text"
        placeholder="Search"
    >

    <button
        class="md:hidden h-full font-light text-3xl text-blue-500 hover:text-blue-600 focus:outline-none ml-4 -mt-px"
        onclick="searchInput.toggle()"
    >&times;</button>
</div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch-input',
                debug: false // Set debug to true if you want to inspect the dropdown
            });

            const searchInput = {
                toggle() {
                    const menu = document.getElementById('js-search-input');
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('md:block');
                    document.getElementById('docsearch-input').focus();
                },
            }
        </script>
    @endif
@endpush
