@extends("app")

@section("css")
    <link href=" {{ asset("css/changelog.css") }} " rel="stylesheet">
@endsection

@section("content")

    <div style="text-align: center; line-height: 2px; padding-top: 10px" id="version_heading">
        <h1>Changelog of the {{ strtoupper($branch) }} branch</h1> <br/>
        <h2>Version {{ $version }}</h2>
    </div>

@endsection