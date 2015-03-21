@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#users" aria-controls="users" role="tab" data-toggle="tab">
                                    <i class="fa fa-user"></i> Users
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#products" aria-controls="products" role="tab" data-toggle="tab">
                                   <i class="fa fa-cubes"></i> Products
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#distributor" aria-controls="distributor" role="tab" data-toggle="tab">
                                    <i class="fa fa-truck"></i> Distributor
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">
                                    <i class="fa fa-dollar"></i> Sales
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#customers" aria-controls="customers" role="tab" data-toggle="tab">
                                    <i class="fa fa-users"></i> Customers
                                </a>
                            </li>
                        </ul>
                        <br />
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="users">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $data['users'] as $datum )
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->name}}</td>
                                            <td>{{$datum->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="products">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stocks</th>
                                            <th>Distributor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $data['products'] as $datum )
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->name}}</td>
                                            <td>{{$datum->description}}</td>
                                            <td>{{$datum->price}}</td>
                                            <td>{{$datum->stocks}}</td>
                                            <td>{{$datum->distributor}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="distributor">
                                 <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $data['distributors'] as $datum )
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->name}}</td>
                                            <td>{{$datum->address}}</td>
                                            <td>{{$datum->phone}}</td>      
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sales">
                               <div class="row">
                                   <div class="col-xs-6"> <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $data['sales'] as $datum )
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->name}}</td>
                                            <td>{{$datum->amount}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table></div>
                                   <div class="col-xs-6">
                                       <form action="">
                                           <div class="form-group">
                                               <label for="">Purchase</label>
                                               <select type="text" class="form-control" placeholder="Product Name" ></select>
                                               <input type="number" min=0 class="form-control" placeholder="Amount" />
                                           </div>
                                       </form>                                       
                                   </div>
                               </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="customers">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $data['customers'] as $datum )
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->name}}</td>
                                            <td>{{$datum->address}}</td>
                                            <td>{{$datum->phone}}</td>      
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
    </div>
</div>
@endsection