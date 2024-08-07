<form action="{{route('cv.insert')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">add</button>

</form>
