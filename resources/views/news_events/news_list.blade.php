<form method="POST" id="form">
    {{-- <a class="btn btn-primary"  href="{{route ('car_rental_store_get')}}"> Add Rental Car</a> --}}
    {{-- <a class="btn btn-primary" href="{{route ('home')}}"> Back to Admin Home</a>         --}}

    @csrf
       
  <table class="table cart">
    <thead>
      <tr>  
          <th class="cart-product-subtotal">no</th>
          <th class="cart-product-subtotal">Action</th>
          <th class="cart-product-subtotal">Type</th>
          <th class="cart-product-price">Title</th>
          <th class="cart-product-subtotal">Description</th>
          <th class="cart-product-price">Image</th>
      </tr>           
    </thead>
    <tbody>
      @foreach($data  as $indexKey =>$item)
      <tr class="cart_item">
        <td class="cart-product-remove">{{$indexKey+1}}</td>
       <td class="cart-product-subtotal"> 
       {{-- <a href="{{ route('car_rental_delete',[$item->id]) }}" onclick="return confirm('Are You Sure {{$item->name}}?')"  class="fa fa-remove" title="Remove this item"><i class="fa fa-trash"></i></a> --}}
        {{-- <a href="{{ route('car_rental_edit',[$item->id]) }}" class="remove" title="Remove this item"><i class="fa fa-edit"></i></a> --}}

       </td>
       <td class="cart-product-subtotal">{{$item->type}} </td>
       <td class="cart-product-subtotal">{{$item->title}} </td>
       <td class="cart-product-subtotal">{{$item->description}} </td>
       <td class="cart-product-subtotal">@if($item->image)
        <img src="{{asset('image/news/' . $item->image) }}" width="100" height="100" alt="">
         @endif</td>
      </tr>
      @endforeach
      
                </tbody>

  </table>

  </form>