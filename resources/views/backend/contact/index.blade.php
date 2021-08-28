@extends('backend.layouts.admin.admin')

@section('title', 'Contact')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Contact</header>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover display">
                        <thead>
                        <tr>
                            <th width="5%">SN</th>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Phone</th>
                            <th width="20%">Country</th>
                            <th width="20%">Message</th>
{{--                            <th width="20%" class="text-center">Date</th>--}}
                
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.contact.partials.table', $contacts, 'contact')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop


@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript">
        function readURL(input) {
            var imgId = $(input).data("id");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var $image = $("#album--" + imgId);
                    if ($image.closest("form").valid()) {
                        $image.attr("src", e.target.result);
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $(".file").change(function () {
                readURL(this);
            });
        });

        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
