<h3>Fornecedores</h3>
{{-- Comentario do interpretador do blade --}}

{{-- bloco de codigo php puro --}}
@php
//comentario normal
echo "teste";

@endphp
@dd($fornecedores)

@if(count($fornecedores) > 0)
    <h3>Existem Fornecedores</h3>
@else
    <h3>Não existem</h3>
@endif
