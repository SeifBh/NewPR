@extends('layouts.defaults_custom')
@section('content')
<input type="hidden" name="pagename" id="pagename" value="news"/>
            <h1>
                News
            </h1> 


            
  
<section id="timeline" >
  <!--
  <div class="row">
    <div class="col-md-4">
      <input type='text' ng-model="post.title">
      <input type='text' ng-model="post.content">
      <button class="btn btn-primary btn-md"  ng-click="addPost()">Add</button>
                               <i ng-show="loading" class="fa fa-spinner"></i>

    </div>
    <div class="col-md-8">
      <table class="table table-striped">
        <tr ng-repeat='post in posts'>
          <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="post.done" ng-change="updatePost(post)"></td>
          <td><% post.title %></td>
          <td><button class="btn btn-danger btn-xs" ng-click="deletePost($index)">  <span class="glyphicon glyphicon-trash" ></span></button></td>
                    <td><i ng-show="loading" class="fa fa-spinner"></i></td>

        </tr>
      </table>
    </div>

  </div 

!-->
  <article ng-repeat="post in posts">

    <div class="inner">
      <span class="date">
        <span class="day">30<sup>th</sup></span>
        <span class="month">Jan</span>
        <span class="year">2014</span>
      </span>



      <h2><% post.title %></h2>


      <p><% post.content %></p>
    </div>
  </article>

</section>
@stop