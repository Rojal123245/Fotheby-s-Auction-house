@extends('main.app')
@section('page_title', $page['page_title'])
@section('content')
<div class="main" style="margin-top: 10%; margin-left: 10%;">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Dimension</th>
                  <th>Artist</th>
                  <th>Category</th>
                </tr>
              </thead>
              <tbody>
              
                <?php 
                $count = 1;
                ?>
            
                @if(count($searchItem) > 0)
               <tr>
                @foreach($searchItem as $item)
                <td>{{ $count ++ }}</td>
                <td>{{ $item->title}}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->dimension }}</td>
                <td>{{ $item->artist }}</td>
                <td>{{ $item->category }}</td>  
             </tr>
             @endforeach
                @endif
               
                </tbody>
              </table>
            </div>
          </div>




  @endsection