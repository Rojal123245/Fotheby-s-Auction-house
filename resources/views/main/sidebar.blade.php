<div class="sidenav">
<?php session_start(); ?>
@if( $_SESSION['clientstatus'] == 'seller' || $_SESSION['clientstatus'] == 'joint')
  <a href="{{ route ('requestItems')}}">Add Items</a>
 @endif
  <a href="{{ route('advanceSearch')}}">Advance Search</a>

</div>