@extends('layouts.base')
@section('content')
<div class="jumbotron">
  <h1 class="display-4"><img src="{{ asset('images/hng-logo.jpg')}}"> HNG Leaderboard</h1>
  <hr class="my-4">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user.jpg')}}" class=" fit card-img-top" alt="...">
              <div class="card-footer"><i class="fa fa-slack fa-lg" aria-hidden="true"></i>
{{ $top[0]->slack_username }} <span class="badge badge-info">{{ $top[0]->points }}</span>
                </div>
            </div>         
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user2.jpg')}}" class="fit card-img-top" alt="...">
                <div class="card-footer"><i class="fa fa-slack fa-lg" aria-hidden="true"></i>
{{ $top[1]->slack_username }} <span class="badge badge-info">{{ $top[1]->points }}</span>
                </div>
            </div>         
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/user3.jpg')}}" class="fit card-img-top" alt="...">
              <div class="card-footer"><i class="fa fa-slack fa-lg" aria-hidden="true"></i>
{{ $top[2]->slack_username }} <span class="badge badge-info">{{ $top[2]->points }}</span>
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
            @if(count($interns) > 0)
            @foreach($interns as $intern)
                <tr>
                    <td></td>
                    <td>{{ $intern->name }}</td>
                    <td>{{ $intern->slack_username }}</td>
                    <td>{{ $intern->email }}</td>
                    <td>{{ $intern->points }}</td>
                    <td>
                        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+window.location.href, 'Facebook Share', 'width=620, height=420'); return false;" class="fa fa-social fa-facebook fa-align-center special_link"></a>
                        <a href="#" data-size="large" class="fa fa-social fa-twitter special_link" id="twitter_sharer"></a>
                    </td>
                    <input type="text" class="intern_id" id="intern_id" value="{{ $intern->id}}" hidden>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){       
        $('#myTable').DataTable();

        //Twitter sharer button
      $("#twitter_sharer").attr('href', "https://twitter.com/intent/tweet?text=Checkout my rank in the HNG Leaderboard here:"+window.location.href);
    });
</script>

@endsection