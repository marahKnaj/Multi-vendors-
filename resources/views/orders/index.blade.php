@include('backend.layouts.head')
    @include('Backend.layouts.nav')
<main class="container">
<div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white  pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-blue-400 rounded">
                            <p class="text-white">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-3xl font-bold">ORDER</h3>
                    <div class="flex-1">
                        <table class="table">
                            <thead>
                                <tr class="h-12 uppercase">
                                    <th class="hidden md:table-cell"></th> 
                                    <th class="">Name</th>
                                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                                        <span class="lg:hidden" title="Quantity">Qtd</span>
                                        <span class=" lg:inline">Quantity</span>
                                    </th>
                                    <th class=" text-right md:table-cell"> del</th>

                                    <th class=" text-right md:table-cell"> price</th>
                                    <th class=" text-right md:table-cell"> Total </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                    <tr>
                                        <td style="width:230px;">
                                           
                                        </td>
                                        <td>
                                            <a href="#">
                                                
                                                <p class="mb-2 text-gray-900 font-bold">{{ $order->name }}</p>
                                            </a>
                                        </td>
                                        <td class="justify-center mt-6 md:justify-end md:flex">
                                            <div class="h-10 w-28">
                                                <div class="relative flex flex-row w-full h-8">
                                                    <form action="{{ route('cart.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $order->id}}" class="" >
                                                   
                                                            <input type="number" name="quantity" value="{{ $order->quantity}}" 
                                                        class="w-full text-center h-10 text-gray-800 outline-none rounded border border-gray-600 py-3" />
                                                       

                                                        <button class="w-full px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100 bg-gray-800">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <form action="{{ route('order.destroy',$order->id) }}" method="POST">
                                                @csrf
                                               
        @method('DELETE')
                                                <input type="hidden" value="{{ $order->id }}" name="id">
                                                <button class="px-3 py-1 text-white bg-gray-800 shadow rounded-full">x</button>
                                            </form>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <span class="text-sm font-medium lg:text-base">
                                            {{ $order->price }}
                                            </span>
                                        </td>
                                       
                                        <td class="hidden text-right md:table-cell">${{$order->price *  $order->quantity}}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </div>
        </main>