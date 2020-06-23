@extends('layouts.base')
@section('content')
<div class="jumbotron">
  <h1 class="display-4">HNG Leaderboard</h1>
  <hr class="my-4">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user.jpg')}}" class=" fit card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Name: {{ $top[0]->name }}</h5>
                <h5 class="card-title">Slack: {{ $top[0]->slack_username }}</h5>
                <h5 class="card-title">Points: {{ $top[0]->points }}</h5>
              </div>
            </div>         
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user2.jpg')}}" class="fit card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Name: {{ $top[1]->name }}</h5>
                <h5 class="card-title">Slack: {{ $top[1]->slack_username }}</h5>
                <h5 class="card-title">Points: {{ $top[1]->points }}</h5>
              </div>
            </div>         
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user3.jpg')}}" class="fit card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Name: {{ $top[2]->name }}</h5>
                <h5 class="card-title">Slack: {{ $top[2]->slack_username }}</h5>
                <h5 class="card-title">Points: {{ $top[2]->points }}</h5>
              </div>
            </div>         
          </div>

      </div>
    </div>
</div>

<div class="container">
    <table id="myTable" class="display table table-striped table-hover" >
        <thead>
            <tr >
                <strong>
                <th></th>
                <th>Full name</th>
                <th>Slack username</th>
                <th>Email</th>
                <th>Points</th>
                <th></th>
                </strong>
            </tr>
        </thead>
        <tfoot>
            <tr >
                <strong>
                <th></th>
                <th>Full name</th>
                <th>Slack username</th>
                <th>Email</th>
                <th>Points</th>
                <th></th>
                </strong>
            </tr>
        </tfoot>
        <tbody>
             
            @foreach($interns as $intern)
                <tr>
                    <td></td>
                    <td>{{ $intern->name }}</td>
                    <td>{{ $intern->slack_username }}</td>
                    <td>{{ $intern->email }}</td>
                    <td>{{ $intern->points }}</td>
                    <td>
                        <button class="btn btn-info">Share</button>
                    </td>
                    <input type="text" class="intern_id" id="intern_id" value="{{ $intern->id}}" hidden>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){       
        $('#myTable').DataTable();
    });
</script>

@endsection