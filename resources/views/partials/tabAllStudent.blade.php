<section class="w-50 mx-auto">
    <h1 class="text-center">All Students</h1>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
            @if ($item->age > 24)
                <tr class="table-danger">
            @elseif ($item->age === 22 || $item->age === 23)
                <tr class="table-info">
            @else
                <tr>   
            @endif

              <th scope="row">{{$item->id}} </th>
              <td>{{$item->name}} </td>
              <td>{{$item->gender}} </td>
              <td>{{$item->email}} </td>
              <td>{{$item->age}} </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</section>