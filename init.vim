if has('vim_starting') | set encoding=utf-8 nobomb | endif
scriptencoding utf-8

" Settings are read when phpcomplete#CompletePHP is called
let g:phpcomplete_parse_docblock_comments = 1
let g:deoplete#enable_at_startup = 1
let g:deoplete#file#enable_buffer_path = 1
let g:deoplete#omni#input_patterns = { 'php': '\w+|[^. \t]->\w*|\w+::\w*' }
let g:deoplete#omni#functions = { 'php': 'phpcomplete#CompletePHP' }

call plug#begin()
Plug 'Shougo/deoplete.nvim', { 'do': ':UpdateRemotePlugins' }
Plug 'shawncplus/phpcomplete.vim', { 'for': 'php' }
call plug#end()
