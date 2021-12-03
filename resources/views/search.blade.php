   @extends('layouts.form')

   @section('title', '検索')


   @section('top','検索')


   @section('content')
      <form action="soshinsaki.php" method="post">
        
         <input type="text" name="input1">
        
         <input type="submit" name="submit" value="検索">
      </form>
   @endsection