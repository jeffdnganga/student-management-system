<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title') | User Profile Project
    </title>
    {{-- Bootstrap core CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/01b4b6f929.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>

<body>

    @include('layouts.inc.front-navbar')

    <main>
        @yield('content')
    </main>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- Bootstrap core JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(".showEditModal").click(function(e) {

            Teacher_name = e.target.parentElement.previousElementSibling.innerText
            Class_name = e.target.parentElement.previousElementSibling.previousElementSibling.innerText
            id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling
                .innerText

            $('#Class_name').val(Class_name);
            $('#Teacher_name').val(Teacher_name);
            $('#submit').val('Edit class');
            $('.modal-title').text('Edit Class');
            $('form').attr('action', 'class/' + id)
            $('form').append('<input type="hidden" name="_method" value="PUT">')

            $("#exampleModal").modal('show');
        });

        $(".showStudentEditModal").click(function(e) {

            Class_id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
            Student_name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
            id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText

            $('#Student_name').val(Student_name);
            $('#Class_id').val(Class_id);
            $('#submit').val('Edit student');
            $('.modal-title').text('Edit student');
            $('form').attr('action', 'student/' + id)
            $('form').append('<input type="hidden" name="_method" value="PUT">')

            $("#newStudentModal").modal('show');
        });
    </script>

</body>

</html>
