@extends('layouts.app')
@section('content')
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            
        </div>
        <div class="useravatar">
            <img alt="山口蛍" src="https://kruf468c.user.webaccel.jp/files/topics/19559_ext_04_0.jpg?v=1476171045">
        </div>
        <div class="card-info"> <span class="card-title">山口蛍</span>
        </div>
    </div>
  
    
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="follow" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">フォロー</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="followers" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">フォロワー</div>
            </button>
        </div>
    </div>

</div>

@endsection
