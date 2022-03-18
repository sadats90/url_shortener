<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
        <form action="{{url('shorten')}}" method="POST">
        @csrf
        <input type="text" value="" name="original_url">
        <button type="submit">Shorten URl</button>

    </form>


  <div class="container">
    <table class="table table-bordered">
        <thead>
          <tr>
          
            <th scope="col">ID</th>
            <th scope="col">Original URL</th>
            <th scope="col">Short URL</th>
          </tr>
        </thead>
        <tbody>
          <tr>

          @foreach($short_urls as $su)   {{--su = short url--}} 
            <td>{{$su->id}}</td>
            <td>{{$su->original_url}}</td>
            

            <td><a href="{{route('show',$su->short_url)}}" target="_blank"> {{route('show',$su->short_url)}}</a></td>  

            {{-- <td><a href="{{$su->original_url}}" target="_blank"> {{route('show',$su->short_url)}}</a></td>  --}}

            


            
          
          </tr>
       @endforeach
        </tbody>
      </table>

    </div>
    
</body>
</html>