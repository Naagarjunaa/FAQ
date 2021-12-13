@extends('layouts.app')
    @section('content')
    <div class="container">
        <a href="{{ url('/faqs/create') }}" class="btn btn-primary">Create FAQ</a>
        {!! $dataTable->table() !!}
    </div>
    {{ $dataTable->scripts() }}

    <script>
        function deleteFunc(id) {
            var url = "{{ url('faqs') }}/" + id;
            if (confirm("Delete Record?") == true) {
                $.ajax({
                    url: url,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        console.log(res);
                        alert(res.message);
                        window.location.reload();
                        window.LaravelDataTables["faq-table"].ajax.reload();
                    }
                });
            }
        }
    </script>

@endsection
@if (session()->has('message'))
<script>
    alert("{{ session()->get('message') }}");
</script>
@endif
