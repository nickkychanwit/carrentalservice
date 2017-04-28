@extends('layouts.master')

@section('content')
<h1 class="title">Singer</h1>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default" id="json-beautifier">
            <div class="panel-heading">
                JSON Response
            </div>
            <div class="panel-body">
                <pre>@{{json}}</pre>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default" id="vue-app-singers">
            <div class="panel-heading">
                Data Render By VueJS
            </div>
            <div class="panel-body">
                Success <label class="label label-success">@{{ success }}</label>
            </div>
            <table class="table" v-if="success">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>@{{ data.id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>@{{ data.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default" id="vue-app">
            <div class="panel-heading">
                Data Render By Blade
            </div>
            <div class="panel-body">
                <p>Status Code: {{ $statusCode }}</p>
                <p>Response Header: {{ $responseHeader }}</p>
                Success: <label class="label label-success">{{ $success }}</label>
                @if (!$success)
                    {{ $data }}
                @endif
            </div>
            @if ($success)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <td>{{ $data->id }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vjson = new Vue({
        el: '#json-beautifier',
        data: data,
        computed: {
            json: function(){
                return JSON.stringify(this.data, null, 2);
            }
        }
    });

    var vm = new Vue({
        el: '#vue-app-singers',
        data: data
    });
</script>
@endsection
