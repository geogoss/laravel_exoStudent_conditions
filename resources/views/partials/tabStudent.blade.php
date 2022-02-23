<section class="w-50 mx-auto">
    <h1 class="text-center">Students List</h1>
    <table class="table table-danger table-striped">
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
            <tr>
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